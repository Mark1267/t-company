<?php

namespace App\Models\Compound;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompoundPlanCategory extends Model
{
    use HasFactory;

    protected $table = 'compound_plan_categories';
    
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
                'message' => 'You added a Plan'
            ]);

            toastr()->success('Plan Added');
        });
        
        self::updating(function ($model) {
            
            $model->user_id = auth()->user()->id;
            
        });
        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Plan'
            ]);
            toastr()->success('Plan Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Plan'
            ]);
            toastr()->success('Plan Deleted');
        });
    
    }
}
