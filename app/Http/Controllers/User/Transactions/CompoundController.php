<?php

namespace App\Http\Controllers\User\Transactions;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Compound\Plan;
use App\Traits\AccountTraits;
use App\Traits\TransactionTraits;
use App\Models\Compound\Investment;
use App\Http\Controllers\Controller;
use App\Models\Compound\Transaction;
use App\Events\Transaction\DepositRequest;
use App\Rules\Transaction\PlanAmountCheck;
use App\Http\Requests\Transaction\DepositSave;
use App\Events\User\Transaction\Compound\ExtendEvent;
use App\Http\Controllers\Admin\CompoundInvestmentController;

class CompoundController extends Controller
{
    public function deposit(){
        return view('dashboard.user3.transaction.deposit', [
            'currencies' => Account::all(),
            'plans' => Plan::orderBy('min', 'asc')->get(),
            'current_plan' => null,
            'type' => true
        ]);
    }

    public function depositPlan($plan_id){
        return view('dashboard.user3.transaction.deposit', [
            'currencies' => Account::all(),
            'plans' => Plan::orderBy('min', 'asc')->get(),
            'current_plan' => $plan_id,
            'type' => true
        ]);
    }

    public function depositSave(DepositSave $request /*Theme2*/){
        $request->validate([
            'amount' => new PlanAmountCheck($request->plan_id, true),
        ]);
        $transaction = Transaction::create([
            'amount' => $request->amount,
            'compound_plans_id' => $request->plan_id,
            'company_address' => AccountTraits::getCurrencyAddress($request->currency_id),
            'account_id' => $request->currency_id,
        ]);

        if($request->bonus || $request->balance){
            if($request->bonus){
                User::where('id', $this->userId())->update([
                    'bonus' =>auth()->user()->bonus -  $transaction->amount,
                    'balance' => auth()->user()->balance + $transaction->amount
                ]);
            }else{
                if($transaction->user->balance < $transaction->amount){
                    toastr()->error('Insufficient Balance For User');
                    return back();
                }else{
                    User::where('id', $this->userId())->update([
                        'balance' => auth()->user()->balance - $transaction->amount
                    ]);
                }
            }

            $investment = new CompoundInvestmentController();
            $investment->start($transaction->transaction_id);

            return redirect()->route('user.overview');
        }
        $transaction = Transaction::where('id', $transaction->id)->first();

        //send mail
        $transaction->currency->coin_amount = TransactionTraits::depositAmount($transaction->currency->symbol, $transaction->amount);
        event(new DepositRequest($transaction));

        return redirect()->route('user.transaction.compound.deposit.details', ['transction_id' => $transaction->transaction_id]);
    }

    public function details($transaction_id){
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        $transaction->currency = TransactionTraits::getCurrency($transaction->account_id);
        $transaction->currency->coin_amount = TransactionTraits::depositAmount($transaction->currency->symbol, $transaction->amount);
        
        return view('dashboard.user3.transaction.details', [
            'transaction' => $transaction
        ]);
    }

    public function deposits($type){
        $transactions = Transaction::where('users_id', $this->userId());
        switch ($type) {
            case 'pending':
                $transactions = $transactions->where('status', 0);
                break;
            
            case 'completed':
                $transactions = $transactions->where('status', 1);
                break;

            case 'extension':
                $transactions = $transactions->where('extension_id', '!=', NULL);
                break;
            
            default:
                $transactions = $transactions;
                break;
        }

        $transactions = $transactions->orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.user3.transactions', [
            'transactions' => $transactions,
            'title' => ucwords($type) . " Deposits"
        ]);
    }

    public function balance(){
        return view('dashboard.user3.transaction.deposit', [
            'balance' => true,
            'currencies' => Account::all(),
            'plans' => Plan::orderBy('min', 'asc')->get(),
            'current_plan' => null
        ]);
    }

    public function calculate($plan_id)
    {
        return view('dashboard.user2.calculator', [
            'plan' => Plan::find($plan_id)
        ]);
    }

    public function extend($id)
    {
        $investment = Investment::find($id);
        $old_transaction = Transaction::where('transaction_id', $investment->transactions_id)->first();
        $transaction = Transaction::create([
            'amount' => $old_transaction->amount,
            'compound_plans_id' => $old_transaction->compound_plans_id,
            'company_address' => $old_transaction->company_address,
            'account_id' => $old_transaction->account_id,
            'extension_id' => $old_transaction->transaction_id,
            'users_id' => $old_transaction->users_id
        ]);
        $transaction = Transaction::where('id', $transaction->id)->first();

        //send mail
        $transaction->currency->coin_amount = TransactionTraits::depositAmount($transaction->currency->symbol, $transaction->amount);
        event(new ExtendEvent($transaction));

        return auth()->user()->admin ? redirect()->route('admin.overview') : redirect()->route('user.transaction.compound.deposit.details', ['transction_id' => $transaction->transaction_id]);
    }
}
