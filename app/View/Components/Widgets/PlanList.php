<?php

namespace App\View\Components\Widgets;

use App\Models\Compound\Plan as CompoundPlan;
use App\Models\Plan;
use App\Models\PlanCategory;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class PlanList extends Component
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

    public function planColor(){
        $colors =  array('color-4', 'color-5', 'color-2', 'color-3');
        return Arr::random($colors);
    }

    public function plans()
    {
        $plans = Plan::orderBy('min', 'asc')->get();
        return $plans;
    }

    public function compoundPlans()
    {
        $compound = CompoundPlan::orderBy('min', 'asc')->get();
        return $compound;
    }

    public function categories()
    {
        return PlanCategory::all();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets.plan-list');
    }
}
