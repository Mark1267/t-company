<?php

namespace App\View\Components\Sidebar;

use App\Models\Plan;
use App\Models\PlanCategory;
use Illuminate\View\Component;
use App\Models\Compound\Plan as CompoundPlan;

class Plans extends Component
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
        return Plan::all();
    }

    public function compoundPlans()
    {
        return CompoundPlan::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.plans');
    }
}
