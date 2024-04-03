<?php

namespace App\View\Components\Dashboard;

use App\Models\Plan;
use Illuminate\Support\Arr;
use App\Models\PlanCategory;
use Illuminate\View\Component;
use App\Models\Compound\Plan as CompoundPlan;

class Plans extends Component
{
    public $cat_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        // $this->cat_id = $cat_id;
        // dd($this->cat_id);
    }

    public function fa(){
        $fa = ['fa-cube', 'fa-trophy', 'fa-shield-alt', 'fa-headset', 'fa-atom', 'fa-bezier-curve', 'fa-dragon'];

        return Arr::random($fa);
    }

    // public function plans(){
    //     if($this->type){
    //         return CompoundPlan::orderBy('min', 'asc')->get();
    //     }
    //     return Plan::orderBy('min', 'asc')->get();
    // }

    public function plans()
    {
        $plans = Plan::where('cat_id', $this->attributes['cat_id'])->get();
        $compound_plans = CompoundPlan::where('cat_id', $this->attributes['cat_id'])->get();

        return [...$plans, ...$compound_plans];//->merge($compound_plans);
        // ->sortByDesc(function($item){
        //     return  $item->create_at; 
        // });
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
        return view('components.dashboard.plans');
    }
}
