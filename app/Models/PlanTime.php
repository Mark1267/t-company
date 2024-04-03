<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanTime extends Model
{
    use HasFactory;

    protected $table = 'plan_time';

    protected $fillable = ['users_id', 'suffix', 'hours'];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Plan Time Stamp'
            ]);

            toastr()->success('Plan Time Stamp Added');
        });
        
        self::updating(function ($model) {
            
            $model->users_id = auth()->user()->id;
            
        });
        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Plan Time Stamp'
            ]);
            toastr()->success('Plan Time Stamp Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Plan Time Stamp'
            ]);
            toastr()->success('Plan Time Stamp Deleted');
        });
    
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function plans(): BelongsTo{
        return $this->belongsTo(Plan::class, 'plan_time_id', 'id');
    }
}
