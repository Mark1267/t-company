<?php
namespace App\Services;

use App\Models\Investment;
use App\Models\Transaction;
use App\Models\Compound\Investment as CompoundInvestment;
use App\Models\Compound\Transaction as CompoundTransactions;

class GeneralService {
    public function getActiveInvestmentForUser(int $user_id): int
    {
        //normal investments
        $active_investments = Transaction::where('users_id', $user_id)->where('nature', 1)->where('status', 1)->get();
        $total_normal_sum = 0;
        if(!empty($active_investments)){
            foreach($active_investments as $active_investment){
                $investment = Investment::where('transactions_id', $active_investment->transaction_id)->first();
                //get active investment
                if(!$investment->status){
                    //get deposit amount
                    $amount = $active_investment->amount;
                    $total_normal_sum += $amount;
                }
            }
            $active_normal_investments = $total_normal_sum;
        }else{
            $active_normal_investments = 0;
        }

        //compound calculations
        $compound_transactions = CompoundTransactions::where('users_id', $user_id)->where('status', 1)->get();
        $total_compound_sum = 0;
        if(!empty($compound_transactions)){
            foreach($compound_transactions as $active_investment){
                $investment = CompoundInvestment::where('transactions_id', $active_investment->transaction_id)->where('continue', 1)->first();
                //get active investment
                if($investment == NULL){
                    continue;
                }
                if(!$investment->status){
                    //get deposit amount
                    $amount = $active_investment->amount;
                    $total_compound_sum += $amount;
                }
            }
            $active_compound_investments = $total_compound_sum;
        }else{
            $active_compound_investments = 0;
        }

        return ($active_compound_investments + $active_normal_investments);
    }

    public function getTotalInvestmentForUser(int $user_id): int{
        $normal_investment = Transaction::where('users_id', $user_id)->where('nature', 1)->where('status', 1)->sum('amount');
        $compound_investment = CompoundTransactions::where('users_id', $user_id)->where('status', 1)->sum('amount');

        return ($normal_investment + $compound_investment);
    }

    public function getPendingInvestmentForUser(int $user_id): int{
        $normal_investment = Transaction::where('users_id', $user_id)->where('nature', 1)->where('status', 0)->sum('amount');
        $compound_investment = CompoundTransactions::where('users_id', $user_id)->where('status', 0)->sum('amount');

        return ($normal_investment + $compound_investment);
    }
}