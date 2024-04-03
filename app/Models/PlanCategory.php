<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\Compound\Plan as CompoundPlan;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanCategory extends Model
{
    use HasFactory;

    protected $table = 'plan_categories';
    
    protected $fillable = [
        'user_id', 'title', 'body'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function plan()
    {
        return $this->hasMany(Plan::class, 'cat_id', 'id');
    }
    
    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->user_id = auth()->user()->id;
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Plan Category'
            ]);

            toastr()->success('Plan Category Added');
        });
        
        self::updating(function ($model) {
            
            $model->user_id = auth()->user()->id;
            
        });
        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Plan Category'
            ]);
            toastr()->success('Plan Category Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Plan Category'
            ]);
            toastr()->success('Plan Category Deleted');
        });
    
    }

    public function getPlansAttribute()
    {
        $plans = Plan::where('cat_id', $this->id)->get();
        $compound_plans = CompoundPlan::where('cat_id', $this->id)->get();

        return [...$plans, ...$compound_plans];
    }
}
