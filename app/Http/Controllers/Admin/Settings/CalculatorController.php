<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Traits\TransactionTraits;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{

    public function index(){
        return view('dashboard.admin.setting.calculator.index', [
            'plans' => Plan::all()
        ]);
    }

    //api

    public function calculate(Request $request){
        $plan = Plan::where('id', $request->plan_id)->first();
        $now = Carbon::now();
        //dd($now->now());
        $profit = TransactionTraits::earnings($request->amount, $plan->rate, $now->now(), $now->addHours($plan->planTime->hours * $plan->time));

        $profit = ($plan->rate * $request->amount * ($plan->planTime->hours * $plan->time)) / (100 * ($plan->planTime->hours * $plan->time));
        // return $profit;
        return response()->json([
            'status' => true,
            'message' => [
            'title' => 'Package Profit Calculated',
            'text' => 'Package of Plan ' . $plan->name . ' will give a profit of $' . $profit . ' when user deposit $' . $request->amount
        ]]
        );
    }
}
