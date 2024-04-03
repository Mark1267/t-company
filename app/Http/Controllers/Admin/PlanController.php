<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feed;
use App\Models\Plan;
use App\Models\User;
use App\Models\PlanTime;
use App\Models\PlanCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PlanController extends Controller
{
   /*  public function __construct(){
        Gate::allows('admin', User::where('id', $this->userId())->where('admin', 1));
    } */

    public function all(){
        return view('dashboard.plan');
    }

    public function add(){
        return view('dashboard.admin.pricing.plan.add', [
            'times' => PlanTime::all()
        ]);
    }

    public function addCategory($catID)
    {
        
        return view('dashboard.admin.pricing.plan.add', [
            'times' => PlanTime::all(),
            'categories' => PlanCategory::all()
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'name' => 'required|unique:plans,name',
            'title' => 'string|nullable',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'rate' => 'required|numeric',
            'time' => 'required|numeric'
        ]);

        Plan::create([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'plan_time_id' => $request->time_id
        ]);

        return redirect()->route('admin.plan.all');
    }

    
    public function edit($plan_id){
        $plan = Plan::find($plan_id);

        return view('dashboard.admin.pricing.plan.edit', [
            'plan' => $plan,
            'times' => PlanTime::all()
        ]);
    }

    public function editSave(Request $request){
        $plan = $request->validate([
            'name' => 'required|unique:plans,name,' . $request->plan_id,
            'title' => 'string|nullable',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'rate' => 'required|numeric',
            'time' => 'required|numeric'
        ]);

        Plan::where('id', $request->plan_id)->update([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'plan_time_id' => $request->time_id
        ]);

        return redirect()->route('admin.plan.all');
    }

    public function delete($plan_id){
        $plan = Plan::find($plan_id);

        $plan->delete();
        
        return back();
    }
}
