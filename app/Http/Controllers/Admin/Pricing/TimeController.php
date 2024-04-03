<?php

namespace App\Http\Controllers\Admin\Pricing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pricing\TimeRequest;
use App\Models\PlanTime;

class TimeController extends Controller
{
    public function all(){
        return view('dashboard.admin.pricing.time.index', [
            'times' => PlanTime::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }
    public function add(){
        return view('dashboard.admin.pricing.time.add');
    }

    public function addSave(TimeRequest $request){
        PlanTime::create($request->all());

        return redirect()->route('admin.pricing.time.all');
    }

    public function update($id){
        return view('dashboard.admin.pricing.time.edit', [
            'time' => PlanTime::find($id)
        ]);
    }

    public function updateSave($id, TimeRequest $request){
        PlanTime::where('id', $id)->update($request->except('_token'));

        return redirect()->route('admin.pricing.time.all');
    }

    public function delete($id){
        $time = PlanTime::find($id);

        $time->delete();

        return back();
    }
}
