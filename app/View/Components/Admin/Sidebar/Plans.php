<?php

namespace App\View\Components\Admin\Sidebar;

use App\Models\Plan;
use Illuminate\View\Component;
use App\Models\Compound\Plan as CompoundPlan;
use App\Models\PlanCategory;

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

    public function plans(){
        $plans = Plan::orderBy('created_at', 'desc')->get();

        return $plans;
    }

    
    public function compoundPlans()
    {
        return CompoundPlan::all();
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
        return view('components.admin.sidebar.plans');
    }
}
