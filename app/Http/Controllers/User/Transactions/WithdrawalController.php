<?php

namespace App\Http\Controllers\User\Transactions;

use App\Models\Feed;
use App\Models\Plan;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\UserWalletList;
use App\Http\Controllers\Controller;
use App\Services\User\GeneralService;
use App\Rules\Transaction\CurrenyCheck;
use App\Events\Transaction\WithdrawalRequest;
use App\Rules\Transaction\WithdrawAmountCheck;
use App\Http\Requests\Transaction\WithdrawSave;

class WithdrawalController extends Controller
{
    public function withdraw(){
        return view('dashboard.user3.transaction.withdraw', [
            'currencies' => Account::all(),
            'amount' => null,
            'addresses' => UserWalletList::where('user_id', auth()->user()->id)
        ]);
        // $data = (new GeneralService())->withdrawaData();

        // return view('dashboard.user2.transaction.withdraw', compact('data'));
        // return view('dashboard.user.transaction.withdraw', compact('data'));
    }

    public function withdrawPlan($plan_id){
        $plan = Plan::select('amount')->where('id', $plan_id)->first();
        return view('dashboard.user3.transaction.withdraw', [
            'currencies' => Account::all(),
            'amount' => $plan->amount
        ]);
    }

    public function withdrawSave(WithdrawSave $request){
        $request->validate([
            'amount' => new WithdrawAmountCheck(null),
            'currency_id' => new CurrenyCheck($request->currency_id)
        ]);

        $transaction = Transaction::create([
            'amount' => $request->amount,
            // 'plan_id' => $request->plan_id,
            'client_address' => UserWalletList::where('user_id', auth()->user()->id)->where('account_id', $request->currency_id)->first()->address,
            'nature' => 0,
            'account_id' => $request->currency_id,
        ]);

        //send email
        $transaction = Transaction::where('id', $transaction->id)->first();
        event(new WithdrawalRequest($transaction));

        Feed::create([
            'type' => 'success',
            'message' => 'Withdrawal Request Send Successful'
        ]);
        toastr()->success('Withdrawal Requested');

        return redirect()->route('user.transaction.withdraw.type', ['type' => 'pending']);
    }

    public function withdraws($type){
        $transactions = Transaction::where('users_id', $this->userId())
                                    ->where('nature', 0);
        switch ($type) {
            case 'pending':
                $transactions = $transactions->where('status', 0);
                break;
            
            case 'completed':
                $transactions = $transactions->where('status', 1);
                break;
            default:
                $transactions = $transactions;
                break;
        }

        $transactions = $transactions->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.user3.transactions', [
        // return view('dashboard.user2.transactions', [
            'transactions' => $transactions,
            'title' => ucwords($type) . " Withdrawals"
        ]);
    }
}
