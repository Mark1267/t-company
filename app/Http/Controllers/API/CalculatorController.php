<?php
namespace App\Http\Controllers\API;

use App\Models\Plan;
use Illuminate\Support\Carbon;
use App\Traits\TransactionTraits;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller{
    use TransactionTraits;
    public function calculate($amount, $plan_id)
    {
        $plan = Plan::find($plan_id);
        return response()->json(['$'.number_format(($amount * $plan->rate)/100, 2)]);
    }
}