<?php
namespace App\Services\User;

use stdClass;
use App\Models\Plan;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\UserWalletList;
use App\Traits\TransactionTraits;

class GeneralService{
    use TransactionTraits;
    public function overviewData($user_id)
    {
        $summary = new stdClass;

        $active_investments = Transaction::where('users_id', $user_id)
                                            ->where('nature', 1)
                                        ->where('status', 1)->get();
        $total_sum = 0;
        if(!empty($active_investments)){
            foreach($active_investments as $active_investment){
                //get active investment
                if(!$active_investment->investment->status){
                    //get deposit amount
                    $amount = $active_investment->amount;
                    $total_sum += $amount;
                }
            }
            $summary->active_investments = $total_sum;
        }else{
            $summary->active_investments = 0;
        }

        $summary->total_investments = Transaction::where('users_id', $user_id)
                                        ->where('nature', 1)->where('status', 1)
                                        ->sum('amount');

        $summary->pending_investments = Transaction::where('users_id', $user_id)
                                        ->where('nature', 1)->where('status', 0)
                                        ->sum('amount');

        $summary->total_withdrawals = Transaction::where('users_id', $user_id)
                                        ->where('nature', 0)->where('status', 1)
                                        ->sum('amount');

        $summary->pending_withdrawals = Transaction::where('users_id', $user_id)
                                        ->where('nature', 0)->where('status', 0)
                                        ->sum('amount');
        
        $deposits = Transaction::where('users_id', $user_id)
        ->where('nature', 1)->where('status', 1)->get();
        $total_earings = 0;
        foreach($deposits as $deposit){
            $plan = Plan::find($deposit->plan_id);
            $profit = ($deposit->amount * $plan->rate)/100;
            $total_earings += $profit;
        }
        $summary->total_earnings = ceil($total_earings);

        $summary->last_deposit = Transaction::where('users_id', $user_id)
        ->where('nature', 1)->where('status', 1)->latest()->first()?->amount;
        $summary->last_withdrawal = Transaction::where('users_id', $user_id)
        ->where('nature', 0)->where('status', 1)->latest()->first()?->amount;

        return $summary;
    }

    public function withdrawaData():stdClass
    {
        $currencies = Account::all();
        $user_currency_list = array();
        foreach($currencies as $currency){
            $account = UserWalletList::where('user_id', auth()->user()->id)->where('account_id', $currency->id)->first();
            if($account != null)
                array_push($user_currency_list, $account);
        }

        $data = new stdClass;
        $data->currency = $user_currency_list;
        $data->summary = $this->overviewData(auth()->user()->id);

        return $data;
    }
}