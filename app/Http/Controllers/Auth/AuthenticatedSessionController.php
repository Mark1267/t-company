<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Traits\FeedTraits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        // $user = User::where('username', $request->username)->where('email_verified_at', null)->first();
        // if($user){
        //     $verfiy = new EmailVerificationNotificationController();
        //     $verfiy->store($request);
        // }
        $request->session()->regenerate();
        toastr()->success('Login Successfull');
        FeedTraits::fcreate('You Logged in to your account');

        //return redirect()->intended(RouteServiceProvider::HOME);
        return redirect(Controller::dashboardHome());
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
