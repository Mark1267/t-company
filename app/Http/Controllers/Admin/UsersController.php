<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Feed;
use App\Models\User;
use App\Models\Account;
use App\Models\Investment;
use App\Traits\FeedTraits;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserWalletList;
use App\Http\Requests\ProfileSave;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{
    public function index($type){
        switch ($type) {
            case 'admins':
                $users = User::where('admin', 1)->get();
                break;
            
            default:
               $users = User::where('admin', 0)->get();
                break;
        }

        foreach ($users as $data) {
            $data->totalDeposits = Transaction::where('users_id', $data->id)->where('nature', 1)->where('status', 1)->sum('amount');
        }

        return view('dashboard.admin.users.index', [
            'users' => $users
        ]);
    }

    public function add(){
        return view('dashboard.admin.users.add');
    }

    public function addSave(Request $request){
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['confirmed', Password::defaults(), 'required'],
            'password_confirmation' => 'min:5|max:16|required',
            'username' => 'required|unique:users,username',
            'phone' => 'required|unique:users,phone'
        ]);
        
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'phone' => $request->phone,
            'admin' => isset($request->admin) ? 1 : 0,
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'ref' => $this->userId()
        ]);

        toastr()->success('User Created');

        return redirect()->route('admin.users.view', ['user_id' => $user->id]);
    }

    public function edit($users_id){
        Gate::allows('admin', User::where('id', $this->userId()));
        $user = User::find($users_id);
        $accounts = Account::all();
        foreach($accounts as $account){
            $account->user_wallet = UserWalletList::where('user_id', $user->id)->where('account_id', $account->id)->first()?->address;
        }
        
        return view('dashboard.admin.users.edit', [
            'user' => $user,
            'accounts' => $accounts
        ]);
    }

    public function editSave(Request $request){
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $request->users_id],
            'password' => ['confirmed', Password::defaults(), 'nullable'],
            'password_confirmation' => 'min:5|max:16|nullable',
            'username' => 'required|unique:users,username,' . $request->users_id,
            'phone' => 'required|unique:users,phone,' . $request->users_id,
            'balance' => 'required|numeric',
            'users_id' => 'required|numeric',
            'bonus' => 'nullable|numeric'
        ]);
        
        User::where('id', $request->users_id)->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => (Str::length($request->password) > 5) ? Hash::make($request->password) : User::select('password')->where('id', $request->users_id)->first()->password,
            'username' => $request->username,
            'phone' => $request->phone,
            'balance' => $request->balance,
            'admin' => isset($request->admin) ? 1 : 0,
            'bonus' => !empty($request->bonus) ? $request->bonus : 0
        ]);

        
        if(!empty($request->account)){
            foreach($request->account as $key => $account){
                if($account != null){
                    if(UserWalletList::where('user_id', $request->users_id)->where('account_id', $key)->exists()){
                        UserWalletList::where('user_id', $request->users_id)->where('account_id', $key)->update(
                            [
                                'address' => $account
                            ]
                        );
                    }else{
                        UserWalletList::create([
                            'user_id' => $request->users_id,
                            'address' => $account,
                            'account_id' => $key
                        ]);
                    }
                }
            }
        }

        toastr()->success('User Updated');

        return redirect()->route('admin.users.view', ['user_id' => $request->users_id]);
    }

    public function verifyUser($user_id){
        $user = User::find($user_id);
        if($user){
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->save();

            return back()->with('success', 'User verified successfully');
        }

        return back()->with('error', 'User not found');
    }

    public function delete($users_id){
        $user = User::find($users_id);
        Transaction::where('users_id', $users_id)->delete();
        Investment::where('main_user', $users_id)->delete();
        UserWalletList::where('user_id', $users_id)->delete();
        Feed::where('users_id', $users_id)->delete();

        $user->delete();

        return back();
    }

    public function view($users_id){
        $user = User::where('id', $users_id)->first()->toArray();

        return view('dashboard.admin.users.view',[
            'user' => $user,
            'investments' => Investment::where('main_user', $users_id)->get(),
            'transactions' => Transaction::where('users_id', $users_id)->paginate(20),
        ]);
    }

}
