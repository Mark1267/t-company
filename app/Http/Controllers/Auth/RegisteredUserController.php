<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Account;
use App\Mail\WelcomeMail;
use App\Traits\FeedTraits;
use Illuminate\Http\Request;
use App\Models\UserWalletList;
use Illuminate\Validation\Rules;
use App\Traits\TransactionTraits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\Admin\NewRegister;
use App\Notifications\Ref\NewNotification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $accounts = Account::all();
        
        return view('auth.register', compact('accounts'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => 'min:5|max:16',
            'username' => 'required|unique:users,username',
            'term' => 'accepted'
        ]);

        $newRef = 0;
        if($request->ref){
            $ref = User::where('username', $request->ref)->first();
            if($ref){
                $newRef = $ref->id;
            }
        }

        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'phone' => $request->phone,
            // 'transaction_PIN' => $request->transaction_PIN,
            'ref' => $newRef
        ]);
        $user = User::where('id', $user->id)->first();

        if(!empty($request->account)){
            foreach($request->account as $key => $account){
                if($account != Null){
                    if(UserWalletList::where('user_id', $user->id)->where('account_id', $key)->exists()){
                        UserWalletList::where('user_id', $user->id)->where('account_id', $key)->update(
                            [
                                'address' => $account
                            ]
                        );
                    }else{
                        UserWalletList::create([
                            'user_id' => $user->id,
                            'address' => $account,
                            'account_id' => $key
                        ]);
                    }
                }
            }
        }

        Mail::to($user->email, $user->full_name)->send(new WelcomeMail($user));
        TransactionTraits::notifyAdmins(new NewRegister($user));

        if($user->ref){
            $ref = User::where('id', $user->ref)->first();
            $ref->notify(new NewNotification($ref, $user));
        }


        event(new Registered($user));

        Auth::login($user, true);
        
        
        toastr()->success('Account Created Successfully');
        FeedTraits::fcreate('Your account has been completed');

        //return redirect(RouteServiceProvider::HOME);
        return redirect()->route('user.overview');
    }
}
