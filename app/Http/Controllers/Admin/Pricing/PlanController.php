<?php

namespace App\Http\Controllers\Admin\Pricing;

use App\Models\Feed;
use App\Models\Plan;
use App\Models\User;
use App\Models\Account;
use App\Models\PlanTime;
use App\Traits\PlanTraits;
use App\Models\PlanCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\NewPlanRequest;

class PlanController extends Controller
{
    use PlanTraits;
    
    public function all($catID){
        return view('dashboard.plan', [
            'cat_id' => $catID
        ]);
    }

    public function add(){
        return view('dashboard.admin.pricing.plan.add', [
            'times' => PlanTime::all(),
            'categories' => PlanCategory::all(),
            'cat_id' => null,
        ]);
    }
    
    public function addCategory($catID)
    {
        return view('dashboard.admin.pricing.plan.add', [
            'times' => PlanTime::all(),
            'categories' => PlanCategory::all(),
            'cat_id' => $catID,
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'name' => 'required|unique:plans,name',
            'title' => 'string|nullable',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'rate' => 'required|numeric',
            'time' => 'required|numeric',
            'cat_id' => 'required|numeric|exists:plan_categories,id',
        ]);

        Plan::create([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' => $request->cat_id,
            'plan_time_id' => $request->time_id
        ]);

        return redirect()->route('admin.pricing.plan.all', ['catID' => $request->cat_id]);
    }

    
    public function edit($plan_id){
        $plan = Plan::find($plan_id);

        return view('dashboard.admin.pricing.plan.edit', [
            'plan' => $plan,
            'times' => PlanTime::all(),
            'categories' => PlanCategory::all()
        ]);
    }

    public function editSave(Request $request){
        $plan = $request->validate([
            'name' => 'required|unique:plans,name,' . $request->plan_id,
            'title' => 'string|nullable',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'rate' => 'required|numeric',
            'time' => 'required|numeric',
            'cat_id' => 'required|numeric|exists:plan_categories,id',
        ]);

        Plan::where('id', $request->plan_id)->update([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' => $request->cat_id,
            'plan_time_id' => $request->time_id
        ]);

        return redirect()->route('admin.pricing.plan.all', ['catID' => $request->cat_id]);
    }

    public function delete($plan_id){
        $plan = Plan::find($plan_id);

        $plan->delete();
        
        return back();
    }
}
