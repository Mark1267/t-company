<?php

namespace App\Http\Controllers\Admin\Transactions\Compound;

use App\Models\User;
use App\Models\Account;
use App\Traits\UserTraits;
use Illuminate\Http\Request;
use App\Models\Compound\Plan;
use App\Traits\AccountTraits;
use App\Http\Controllers\Controller;
use App\Models\Compound\Transaction;
use Illuminate\Support\Facades\Gate;
use App\Events\Transaction\DepositRequest;
use App\Rules\Transaction\PlanAmountCheck;
use App\Traits\Compound\TransactionTraits;
use App\Http\Requests\Transaction\DepositSave;
use App\Http\Controllers\Admin\CompoundInvestmentController;

class DepositController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function details($transaction_id){
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        $transaction->currency = TransactionTraits::getCurrency($transaction->account_id);
        $transaction->currency->coin_amount = TransactionTraits::depositAmount($transaction->currency->symbol, $transaction->amount);
        
        return view('dashboard.user.transaction.details', [
            'transaction' => $transaction
        ]);
    }

    public function update($transaction_id){
        return view('dashboard.admin.transactions.deposit.update', [
            'transaction' => Transaction::where('transaction_id', $transaction_id)->first(),
            'plans' => Plan::all(),
            'currencies' => Account::all()
        ]);
    }

    public function updateSave(DepositSave $request){
        $request->validate([
            'amount' => new PlanAmountCheck($request->plan_id, true)
        ]);

        $transaction = Transaction::where('id', $request->id)->update([
            'amount' => $request->amount,
            'account_id' => $request->currency_id,
            'compound_plans_id' => $request->plan_id,
            'status' => $request->status ? 1 : 0
        ]);
        $transaction = Transaction::where('id', $request->id)->first();

        toastr()->success('Transaction Updated');

        if($request->status){
            //start investment
            return redirect()->route('admin.investment.start', ['transaction_id' => $transaction->transaction_id]);
        }else{
            return redirect()->route('admin.transaction.compound.type', ['type' => 'pending']);
        }
    }
    
    public function deposit(){
        Gate::allows('admin', UserTraits::getCurrentAdminUser($this->userId()));

        return view('dashboard.user.transaction.deposit', [
            'currencies' => Account::all(),
            'plans' => Plan::orderBy('created_at', 'desc')->get(),
            'current_plan' => null,
            'users' => User::where('admin', 0)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function depositPlan($plan_id){
        Gate::allows('admin', UserTraits::getCurrentAdminUser($this->userId()));

        return view('dashboard.user.transaction.deposit', [
            'currencies' => Account::all(),
            'plans' => Plan::orderBy('created_at', 'desc')->get(),
            'current_plan' => $plan_id,
            'users' => User::where('admin', 0)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function depositSave(DepositSave $request){
        $request->validate([
            'amount' => new PlanAmountCheck($request->plan_id, true),
            'users_id' => 'required|numeric'
        ]);
        
        $transaction = Transaction::create([
            'amount' => $request->amount,
            'plan_id' => $request->plan_id,
            'company_address' => AccountTraits::getCurrencyAddress($request->currency_id),
            'nature' => 1,
            'account_id' => $request->currency_id,
            'users_id' => $request->users_id
        ]);

        //check if accepted is on
        if($request->status){
            //start investment
            return redirect()->route('admin.compound.investment.start', ['transaction_id' => $transaction->transaction_id]);
        }else{

            $transaction = Transaction::where('id', $transaction->id)->first();

            //send mail
            event(new DepositRequest($transaction));

            return redirect()->route('admin.transaction.compound.type', ['type' => 'all']);
        }
    }

    public function deposits($type){
        Gate::allows('admin', UserTraits::getCurrentAdminUser($this->userId()));

        $transactions = (new Transaction())->where('extension_id', '=', NULL);
        switch ($type) {
            case 'pending':
                $transactions = $transactions->where('status', 0);
                break;
            
            case 'completed':
                $transactions = $transactions->where('status', 1);
                break;
            
            case 'extension':
                $transactions = $transactions;
                break;
                
            default:
                $transactions = $transactions;
                break;
        }

        $transactions = $transactions->orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.compound.transactions', [
            'transactions' => $transactions,
            'title' => ucwords($type) . " Deposits",
            'type' => true,
            'extenstion' => false
        ]);
    }

    public function depositsExtension($extension_id)
    {
        return view('dashboard.compound.transactions', [
            'transactions' => Transaction::where('extension_id', $extension_id)->orderBy('created_at', 'desc')->paginate(20),
            'title' => ucwords('extension') . " of Deposits",
            'type' => true,
            'extenstion' => true
        ]);
    }

    public function delete($transaction_id){
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();

        CompoundInvestmentController::delete($transaction_id);
        
        $transaction->delete();
        return back();
    }
}
