<?php

namespace App\View\Components\User\Overview;

use App\Models\Compound\Transaction as CompoundTransaction;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\View\Component;
use stdClass;

class AccountSummary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    protected function getProfit($amount, $rate){
        return ($amount * $rate) / 100;
    }

    private function getTotalInvestments($active_investments): int{
        $total_sum = 0;
        if(!empty($active_investments)){
            foreach($active_investments as $active_investment){
                //get active investment
                if($active_investment->investment != null){
                    if(!$active_investment->investment->status){
                        //get deposit amount
                        $amount = $active_investment->amount;
                        $total_sum += $amount;
                    }
                }
            }
        }
        return $total_sum;
    }

    public function summary(){
        $summary = new stdClass;

        $active_investments = Transaction::where('users_id', auth()->user()->id)->where('nature', 1)->where('status', 1)->get();
        $active_compond_investments = CompoundTransaction::where('users_id', auth()->user()->id)->where('status', 1)->get();
        
        $summary->active_investments = $this->getTotalInvestments($active_investments) + $this->getTotalInvestments($active_compond_investments);

        

        $summary->total_investments = Transaction::where('users_id', auth()->user()->id)
                                        ->where('nature', 1)->where('status', 1)
                                        ->sum('amount');
        $total_profit = 0;
        if($summary->total_investments != 0){
            foreach($active_investments as $investments){
                if($investments->investment->paid){
                    $total_profit += $this->getProfit($investments->amount, $investments->plan->rate);
                }
            }
            $summary->total_profit = $total_profit;
        }else{
            $summary->total_profit = 0;
        }

        $summary->pending_investments = Transaction::where('users_id', auth()->user()->id)
                                        ->where('nature', 1)->where('status', 0)
                                        ->sum('amount') + CompoundTransaction::where('users_id', auth()->user()->id)
                                        ->where('status', 0)
                                        ->sum('amount');

        $summary->total_withdrawals = Transaction::where('users_id', auth()->user()->id)
                                        ->where('nature', 0)->where('status', 1)
                                        ->sum('amount');

        $summary->pending_withdrawals = Transaction::where('users_id', auth()->user()->id)
                                        ->where('nature', 0)->where('status', 0)
                                        ->sum('amount');

        return $summary;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.overview.account-summary');
    }
}
