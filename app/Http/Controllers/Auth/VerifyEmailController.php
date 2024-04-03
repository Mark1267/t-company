<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\VerifyEmailRequest;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(VerifyEmailRequest $request)
    {
        $user = User::find($request->id);
        if (!$user->hasVerifiedEmail()) {
           $user->markEmailAsVerified();
           $old_pass = $user->password;
           $user->update(['password' => Hash::make('1234567890')]);
           Auth::attempt(['email' => $user->email, 'password' => '1234567890']);
           $user->update(['password' => $old_pass]);
           
            // event(new Verified($user));
        }
        // $user = User::find($request = auth();
        if ($user->hasVerifiedEmail()) {
            return redirect()->intended(Controller::dashboardHome().'?verified=1');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->intended(Controller::dashboardHome().'?verified=1');
    }
}
