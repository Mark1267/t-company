<?php

namespace App\View\Components\Dashboard;

use App\Models\Transaction;
use Illuminate\View\Component;

class Referrals extends Component
{
    public $tableData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableData)
    {
        $this->tableData = $tableData;

        foreach ($this->tableData as $data) {
            $data->totalDeposits = Transaction::where('users_id', auth()->user()->id)
                                         ->where('nature', 1)->where('status', 1)->sum('amount');
         }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.referrals');
    }
}
