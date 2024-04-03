<?php

namespace App\Traits;

use App\Models\Plan;
use Illuminate\Http\Request;

trait PlanTraits {
    protected $location = 'storage/pricing/plans/';

    public function addMiningPlan(Request $request){
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,gif,webm',
            'maintenance' => 'required|numeric',
            'hash_rate' => 'required|string',
            'unit_price' => 'required|numeric'
        ], [
            'cat_id.required' => 'Category must be selected',
            'cat_id.numeric' => 'Category must be selected',
            'currency_id.required' => 'Currency must be selected',
            'currency_id.numeric' => 'Currency must be selected'
        ]);

        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = $file->hashName();
            // Upload file
            $file->move($this->location,$filename);
        }else{
            toastr()->warning('Please Select an Image file.');
            return back();
        }

        Plan::create([
            'name' =>$request->name,
            'image' =>$this->location.$filename,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' =>$request->cat_id,
            'accounts_id' =>$request->currency_id,
            'maintenance' => $request->maintenance,
            'hash_rate' => $request->hash_rate,
            'unit_price' => $request->unit_price,
            'in_stock' => 1,
            'plan_time_id' => $request->time_id
        ]);

        return true;
    }
    
    public function addInvestmentPlan(Request $request){
        Plan::create([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' =>$request->cat_id,
            'unit_price' => '1.0',
            'accounts_id' =>$request->currency_id,
            'plan_time_id' => $request->time_id
        ]);

        return true;
    }

    public function updateMiningPlan(Request $request, $id){
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg,gif,webm',
            'name' => 'required|unique:plans,name,' . $id,
            'maintenance' => 'required|numeric',
            'hash_rate' => 'required|string',
            'unit_price' => 'required|numeric'
        ]);

        $fileLocation = Plan::select('image')->where('id', $id)->first()->image;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = $file->hashName();
            // Upload file
            $file->move($this->location,$filename);
            $fileLocation = $this->location.$filename;
        }

        Plan::where('id', $id)->update([
            'name' =>$request->name,
            'image' =>$fileLocation,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' =>$request->cat_id,
            'accounts_id' =>$request->currency_id,
            'maintenance' => $request->maintenance,
            'hash_rate' => $request->hash_rate,
            'unit_price' => $request->unit_price,
            'plan_time_id' => $request->time_id
        ]);

        return true;
    }
    
    public function updateInvestmentPlan(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:plans,name,' . $id,
        ]);

        Plan::where('id', $id)->update([
            'name' =>$request->name,
            'title' =>$request->title,
            'min' =>$request->min,
            'max' =>$request->max,
            'rate' =>$request->rate,
            'time' =>$request->time,
            'cat_id' =>$request->cat_id,
            'accounts_id' =>$request->currency_id,
            'unit_price' => '1.0',
            'plan_time_id' => $request->time_id
        ]);

        return true;
    }

    
}