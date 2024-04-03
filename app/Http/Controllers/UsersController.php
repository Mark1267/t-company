<?php

namespace App\Http\Controllers;

use toastr;
use stdClass;
use App\Models\Feed;
use App\Models\User;
use App\Models\Account;
use App\Models\Investment;
use App\Traits\FeedTraits;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\GeneralTraits;
use App\Models\UserWalletList;
use App\Traits\ReferralTraits;
use Illuminate\Validation\Rules;
use App\Http\Requests\ProfileSave;
use Illuminate\Support\Facades\Hash;
use App\Services\User\GeneralService;
use App\Services\Investment\DataService;
use App\Models\Compound\Investment as CompoundInvestment;

class UsersController extends Controller
{
    function __construct()
    {
        $this->middleware(['checkForAdminInUserAuth']);
    }
    public function overview(){

        $refBy = User::find(auth()->user()->ref);
        $investments = Investment::where('main_user', $this->userId())->orderBy('created_at', 'desc')->paginate(15);

        $investmentsi = new stdClass;

        foreach($investments as $key => $data){
            $investmentsi->$key = new DataService($data->id);
        }
        // return view('dashboard.user.overview', [
        return view('dashboard.user3.overview', [
            'user' => User::where('id', auth()->user()->id)->first(),
            // 'ref_by' => $refBy,
            'transactions' => $investments,
            // 'summary' => (new GeneralService())->overviewData(auth()->user()->id),
            'compounds' => CompoundInvestment::where('main_user', $this->userId())->get()
        ]);
    }

    public function profile(){
        $user = User::where('id', $this->userId())->first();
        $accounts = Account::all();
        foreach($accounts as $account){
            $account->user_wallet = UserWalletList::where('user_id', $user->id)->where('account_id', $account->id)->first()->address ?? '';
        }

        return view('dashboard.user3.profile', [
            'user' => $user,
            'accounts' => $accounts
        ]);
    }

    public function profileSave(ProfileSave $request){

        User::where('id', $this->userId())->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => (Str::length($request->password) > 5) ? Hash::make($request->password) : User::select('password')->where('id', $this->userId())->first()->password,
            'username' => $request->username ?? auth()->user()->username,
            'phone' => $request->phone ?? auth()->user()->phone,
            // 'transaction_PIN' => (Str::length($request->transaction_PIN) == 4) ? $request->transaction_PIN : User::select('transaction_PIN')->where('id', $this->userId())->first()->transaction_PIN,
        ]);

        if(!empty($request->account)){
            foreach($request->account as $key => $account){
              if($account != Null){
                if(UserWalletList::where('user_id', auth()->user()->id)->where('account_id', $key)->exists()){
                    UserWalletList::where('user_id', auth()->user()->id)->where('account_id', $key)->update(
                        [
                            'address' => $account
                        ]
                    );
                }else{
                    UserWalletList::create([
                        'address' => $account,
                        'account_id' => $key
                    ]);
                }
              }
            }
        }
        FeedTraits::fcreate('Updated Profile');

        return redirect()->route('user.profile')->with('success', 'Profile Updated');
    }

    public function alerts(){
        $feeds = Feed::where('users_id', $this->userId())->orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.user3.alert', [
            'feeds' => $feeds
        ]);
    }

    public function plans(){
    return view('dashboard.user3.plan'/*, ['type' => true] */);
    }

    public function referrals(){
        return view('dashboard.user3.ref', [
        // return view('dashboard.user2.ref', [
            'referrals' => ReferralTraits::getUserReferrals($this->userId()),
        ]);
    }

}
