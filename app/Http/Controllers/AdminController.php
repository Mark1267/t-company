<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\User;
use App\Models\Account;
use App\Models\Investment;
use App\Traits\FeedTraits;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserWalletList;
use Illuminate\Validation\Rules;
use App\Http\Requests\ProfileSave;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Models\Compound\Investment as CompoundInvestment;

class AdminController extends Controller
{
    public function overview(){
        Gate::allows('admin', User::where('id', $this->userId())->where('admin', 1));
        
        return view('dashboard.admin.overview', [
            'transactions' => Investment::orderBy('created_at', 'desc')->paginate(15),
            'compounds' => CompoundInvestment::all()

            // 'transactions' => Transaction::where('nature', 1)->where('status', 1)->orderBy('created_at', 'desc')->paginate(15),
        ]);
    }

    public function alerts(){
        Gate::allows('admin',  User::where('id', $this->userId())->where('admin', 1));
        $feeds = Feed::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.alert', [
            'feeds' => $feeds
        ]);
    }

    public function profile(){
        $user = User::where('id', $this->userId())->first();
        $accounts = Account::all();
        foreach($accounts as $account){
            $account->user_wallet = UserWalletList::where('user_id', $user->id)->where('account_id', $account->id)->first()->address ?? '';
        }

        return view('dashboard.profile', [
            'user' => $user,
            'accounts' => $accounts
        ]);
    }

    public function profileSave(ProfileSave $request){
        $user = User::where('id', $this->userId())->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => (Str::length($request->password) > 5) ? Hash::make($request->password) : User::select('password')->where('id', $this->userId())->first()->password,
            'username' => $request->username,
            'phone' => $request->phone
        ]);

        toastr()->success('Profile Updated');
        FeedTraits::fcreate('Updated Profile');

        return redirect()->route('admin.profile');
    }
}
