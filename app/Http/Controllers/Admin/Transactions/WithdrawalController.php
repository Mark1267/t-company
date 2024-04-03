<?php

namespace App\Http\Controllers\Admin\Transactions;

use App\Models\Feed;
use App\Models\Plan;
use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Transaction\WithdrawalRequest;
use App\Events\Transaction\WithdrawalSuccess;
use App\Rules\Transaction\WithdrawAmountCheck;
use App\Http\Requests\Transaction\WithdrawSave;

class WithdrawalController extends Controller
{
    public function withdraw(){
        return view('dashboard.user.transaction.withdraw', [
            'currencies' => Account::all(),
            'amount' => null,
            'users' => User::where('admin', 0)->get()
        ]);
    }

    public function withdrawPlan($plan_id){
        $plan = Plan::select('amount')->where('id', $plan_id)->first();
        return view('dashboard.user.transaction.withdraw', [
            'currencies' => Account::all(),
            'amount' => $plan->amount,
            'users' => User::where('admin', 0)->get()
        ]);
    }

    public function withdrawSave(WithdrawSave $request){
        $request->validate([
            'amount' => new WithdrawAmountCheck($request->users_id)
        ]);

        $transaction = Transaction::create([
            'amount' => $request->amount,
            'client_address' => $request->client_address,
            'nature' => 0,
            'account_id' => $request->currency_id,
            'users_id' => $request->users_id
        ]);

        //check if accepted is on
        if($request->status){
            //accept wthdrawal
            return $this->accept($transaction->transaction_id);
        }else{

            //send email
            $transaction = Transaction::where('id', $transaction->id)->first();
            event(new WithdrawalRequest($transaction));

            Feed::create([
                'type' => 'success',
                'message' => 'Withdrawal Request Send Successful'
            ]);
            toastr()->success('Withdrawal Requested');

            return redirect()->route('admin.transaction.withdraw.type', ['type' => 'pending']);
        }
    }

    public function update($transaction_id){
        return view('dashboard.admin.transactions.withdrawal.update', [
            'transaction' => Transaction::where('transaction_id', $transaction_id)->first(),
            'currencies' => Account::all()
        ]);
    }

    public function updateSave(WithdrawSave $request){
        $request->validate([
            'amount' => new WithdrawAmountCheck($request->users_id)
        ]);

        $transaction = Transaction::where('id', $request->id)->update([
            'amount' => $request->amount,
            'client_address' => $request->client_address,
            'account_id' => $request->currency_id
        ]);

        $transaction = Transaction::where('id', $request->id)->first();

        toastr()->success('Transaction Updated');

        if($request->status){
            return $this->accept($transaction->transaction_id);
        }else{
            return redirect()->route('admin.transaction.withdraw.type', ['type' => 'pending']);
        }
    }

    public function withdraws($type){
        $transactions = Transaction::where('nature', 0);
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

        $transactions = $transactions->orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.transactions', [
            'transactions' => $transactions,
            'title' => ucwords($type) . " Withdrawals"
        ]);
    }

    public function accept($transaction_id){
        //get amount to withdraw
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        //check if withdrawal is accepted already
        if($transaction->status){
            toastr()->error('Withdrawal Accepted Already');
            return back();
        }
        $new_balance = $transaction->user->balance - $transaction->amount;
        if($new_balance < 0){
            toastr()->error('Insufficient Balance For User');
            return back();
        }else{
            User::where('id', $transaction->users_id)->update([
                'balance' => $new_balance
            ]);

            $transaction = Transaction::where('transaction_id', $transaction_id)->update([
                'status' => 1
            ]);

            //notifiy clennt
            $transaction = Transaction::where('transaction_id', $transaction_id)->first();
            event(new WithdrawalSuccess($transaction));
            
            return redirect()->route('admin.transaction.withdraw.type', ['type' => 'completed']);
        }
    }

    public function delete($transaction_id){
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        
        $transaction->delete();
        return back();
    }
}
