<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Compound\Investment;
use App\Http\Controllers\Controller;
use App\Models\Compound\Transaction;
use App\Events\InvestmentStartedEvent;

class CompoundInvestmentController extends Controller
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
            'next_interval' => Carbon::now()->addHours($transaction->plan->intervals->hours),
            'pause_date' => NULL, 
            'paused' => NULL,
            'end' => Carbon::now()->addHours($transaction->plan->time * $transaction->plan->planTime->hours),
            'transactions_id' => $transaction_id,
            'status' => 0,
            'main_user' => $transaction->users_id
        ]);

        //notifiy client
        $investment = Investment::where('transactions_id', $transaction_id)->first();
        event(new InvestmentStartedEvent($investment, true));

        return (auth()->user()->admin) ? redirect()->route('admin.transaction.compound.type', ['type' => 'completed']) : redirect()->route('user.transaction.deposit.type', ['type' => 'completed']);
    }

    public function restartInvestment($transaction_id){
        //get if amount is in the balance
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        if($transaction->user->balance < $transaction->amount){
            toastr()->error('Insufficient Balance For User');
            return back();
        }else{
            
            $transaction->reinvest = true;
            $transaction->save();
            $transactionData = $transaction->toArray();
            $new_transaction = Transaction::create($transactionData);

            User::where('id', $transaction->users_id)->update([
                'balance' => $transaction->user->balance - $transaction->amount
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

            $n_n_interval = $investment->next_interval;
            if($investment->next_interval != NULL){
                $n_interval = Carbon::parse($investment->next_interval);
                $dbisap = abs($pause_date->diffInSeconds($n_interval));
                $n_n_interval = Carbon::now()->addSeconds($dbisap);
            }

            $investment->update([
                'start' => $new_start,
                'end' => $new_end,
                'next_interval' => $n_n_interval
            ]);
        }
        $investment->save();

        $message = $investment->paused ? 'Investment has been paused' : 'Investment has been unpaused';
        return back()->with('success', $message);
    }
    
    public function startExtension($transaction_id)
    {
        //check for and existing investment
        self::delete($transaction_id);

        //variables
        $transactionData = Transaction::where('transaction_id', $transaction_id);

        //Update Transaction Table
        $transaction = $transactionData->update([
            'status' => 1
        ]);

        $trans = $transactionData->first();
        $inves = Investment::where('transactions_id', $trans->extension_id)->first();

        $start = Carbon::parse($inves->start);
        $end = Carbon::parse($inves->end);
        $pause_date = Carbon::parse($inves->next_interval);

        $dbsap = abs($pause_date->diffInSeconds($start));
        $dbeap = abs($pause_date->diffInSeconds($end));
        $new_start = Carbon::now()->subSeconds($dbsap);
        $new_end = Carbon::now()->addSeconds($dbeap);

        $investment = Investment::where('transactions_id', $trans->extension_id)->update([
            'start' => $new_start,
            'end' => $new_end,
            'next_interval' => Carbon::now()->addHours($trans->plan->intervals->hours),
            'continue' => true,
        ]);

        return back()->with('success', 'Investment has been rolled over');
    }
}
