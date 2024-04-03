<?php

namespace App\View\Components\Widgets;

use App\Models\Plan;
use Illuminate\View\Component;

class ProfitCalculator extends Component
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

    public function plans()
    {
        $plans = Plan::orderBy('min', 'asc')->get();
        return $plans;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.profit-calculator');
    }
}
