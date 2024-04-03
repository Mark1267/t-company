<?php

namespace App\View\Components\Admin\Overview;

use stdClass;
use App\Models\User;
use App\Models\Contact;
use App\Models\Investment;
use App\Models\Transaction;
use Illuminate\View\Component;
use App\Models\Compound\Investment as CompoundInvestment;
use App\Models\Compound\Transaction as CompoundTransaction;

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

    private function getTotalInvestments($active_investments, $type = true): int{
        $total_sum = 0;
        if(!empty($active_investments)){
            foreach($active_investments as $active_investment){
                if($type){
                    $investment = Investment::where('transactions_id', $active_investment->transaction_id)->first();
                }else{
                    $investment = CompoundInvestment::where('transactions_id', $active_investment->transaction_id)->first();
                }
                //get active investment
                if(is_null($investment?->status)){
                    $active_investment->status = 0;
                    $active_investment->save();
                }else{
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

        $active_investments = Transaction::where('nature', 1)->where('status', 1)->get();
        $active_compond_investments = CompoundTransaction::where('status', 1)->get();

        $summary->active_investments = $this->getTotalInvestments($active_investments) + $this->getTotalInvestments($active_compond_investments, false);

        // $total_sum = 0;
        // if(!empty($active_investments)){
        //     foreach($active_investments as $active_investment){
        //         //get active investment
        //         // if(!$active_investment->investment->status){
        //         $investment = Investment::where('transactions_id', $active_investment->transaction_id)->first();
        //         //get active investment
        //         if(is_null($investment->status)){
        //             $active_investment->status = 0;
        //             $active_investment->save();
        //         }else{
        //             if(!$investment->status){
        //                 //get deposit amount
        //                 $amount = $active_investment->amount;
        //                 $total_sum += $amount;
        //             }
        //         }
        //         //$summary->active_investments = $active_investments->sum($active_investments->deposit->amount);
        //     }
        //     $summary->active_investments = $total_sum;
        //     //dd($total_sum);
        // }else{
        //     $summary->active_investments = 0;
        // }

        $summary->total_investments = Transaction::where('nature', 1)->where('status', 1)
                                        ->sum('amount');

        $summary->pending_investments = Transaction::where('nature', 1)->where('status', 0)
                                        ->sum('amount');

        $summary->total_withdrawals = Transaction::where('nature', 0)->where('status', 1)
                                        ->sum('amount');

        $summary->pending_withdrawals = Transaction::where('nature', 0)->where('status', 0)
                                        ->sum('amount');

        $summary->total_balance = User::where('admin', 0)->sum('balance');
        $summary->total_users = User::where('admin', 0)->count();
        $summary->total_admins = User::where('admin', 1)->count();
        $summary->total_tickets = Contact::count();

        return $summary;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.overview.account-summary');
    }
}
