<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Events\InvestmentStartedEvent;
use App\Notifications\InvestmentStart;

class InvestmentController extends Controller
{
    public function start($transaction_id){
        //check for and existing investment
        self::delete($transaction_id);

        //variables
        $transactionData = Transaction::where('transaction_id', $transaction_id);

        //Update Transaction Table
        $transaction = $transactionData->update([
            'status' => 1
        ]);

        //Add a new row to Investments Table
        $transaction = $transactionData->first();
        $now = Carbon::now();
        $investment = Investment::create([
            'end' => $now->addHours($transaction->plan->time * $transaction->plan->planTime->hours),
            'transactions_id' => $transaction_id,
            'status' => 0,
            'main_user' => $transaction->users_id
        ]);

        //notify client
        $investment = Investment::where('transactions_id', $transaction_id)->first();
        event(new InvestmentStartedEvent($investment));

        return (auth()->user()->admin) ? redirect()->route('admin.transaction.deposit.type', ['type' => 'completed']) : redirect()->route('user.transaction.deposit.type', ['type' => 'completed']);
    }

    public function restartInvestment($transaction_id, $type){
        //get if amount is in the balance
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        if($transaction->user->balance < $transaction->amount){
            toastr()->error('Insufficient Balance For User');
            return back();
        }else{
            $transaction->reinvest = true;
            $transaction->save();
            $transactionData = $transaction->toArray();
            if($type === 'all'){
                $amount = $transaction->amount + ($transaction->amount*$transaction->plan->rate)/100;
            }else{
                $amount = $transaction->amount;
            }
            $transactionData['amount'] = $amount;

            $new_transaction = Transaction::create($transactionData);

            User::where('id', $transaction->users_id)->update([
                'balance' => max(($transaction->user->balance - $amount), 0)
                // 'balance' => (function() use ($transaction, $amount){
                //     $balance = $transaction->user->balance - $amount;
                //     if($balance < 0) return 0;
                //     return $balance;
                // })()
            ]);
            
            return $this->start($new_transaction->transaction_id);
        }

    }

    public static function delete($transaction_id){
        $investment = Investment::where('transactions_id', $transaction_id)->first();

        if($investment){
            $investment->delete();
            Transaction::where('transaction_id', $transaction_id)->update([
                'status' => 0,
                'transaction_id' => $transaction_id
            ]);
        }

        return back();
    }
    
    public function pauseToggle(String $transaction_id){
        $investment = Investment::where('transactions_id', $transaction_id)->first();
        $oldPuase = $investment->paused;
        $investment->paused = !$investment->paused;
        if(!$oldPuase){
            $investment->pause_date = Carbon::now();
        }else{
            // $bsap = 
            $start = Carbon::parse($investment->start);
            $end = Carbon::parse($investment->end);
            $pause_date = Carbon::parse($investment->pause_date);

            $dbsap = abs($pause_date->diffInSeconds($start));
            $dbeap = abs($pause_date->diffInSeconds($end));
            $new_start = Carbon::now()->subSeconds($dbsap);
            $new_end = Carbon::now()->addSeconds($dbeap);

            $investment->update([
                'start' => $new_start,
                'end' => $new_end
            ]);
        }
        $investment->save();

        $message = $investment->paused ? 'Investment has been paused' : 'Investment has been unpaused';
        return back()->with('success', $message);
    }
}
