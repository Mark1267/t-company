<?php

namespace App\Rules\Transaction;

use App\Models\Compound\Plan as CompoundPlan;
use App\Models\Plan;
use Illuminate\Contracts\Validation\Rule;

class PlanAmountCheck implements Rule
{

    protected $plan_id;
    public $error;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($plan_id, public bool $type)
    {
        $this->error = '';
        $this->plan_id = $plan_id;
        $this->plan = $type ? CompoundPlan::where('id', $this->plan_id)->first() : Plan::where('id', $this->plan_id)->first();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //dd($this->plan);
        if($this->plan){
            if($value > $this->plan->max){
                return false;
                $this->error = 'Maximum of' . $this->plan->max;
            } elseif($value < $this->plan->min){
                return false;
                $this->error = 'Minimum of' . $this->plan->min;
            }else{
                $this->error = '';
                return true;
            }
        }else{
            $this->error = "Please choose a plan";
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Minimum of $' . $this->plan->min . ' and ' . 'Maximum of $' . $this->plan->max;
    }
}
