<?php

namespace App\View\Components\Widgets;

use stdClass;
use App\Models\Transaction;
use Illuminate\View\Component;
use App\Traits\TransactionTraits;
use Carbon\Carbon;

class Stats extends Component
{
    use TransactionTraits;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function stats()
    {
        $stats = new stdClass;
        $year = Carbon::parse('2019-06-21');

        $stats->deposits = $this->bd_nice_number(14510000000 + Transaction::where('nature', 1)->where('status', 1)->sum('amount'));
        $stats->withdrawals = $this->bd_nice_number(29700000000 + Transaction::where('nature', 0)->where('status', 1)->sum('amount'));
        $stats->days = $this->bd_nice_number($year->diffInDays(Carbon::now()));

        return $stats;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.stats');
    }
}
