<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = [
        'name', 'plan_time_id',
        'users_id',
        'title', 'cat_id',
        'min', 'max', 'rate','time'
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Plan'
            ]);

            toastr()->success('Plan Added');
        });
        
        self::updating(function ($model) {
            
            $model->users_id = auth()->user()->id;
            
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
    
    public function planTime(){
        return $this->hasOne(PlanTime::class, 'id', 'plan_time_id');
    }

    protected function dailyProfit(): Attribute{
        return Attribute::make(
            get: function(){
                $top = $this->rate * 24;

                $bottom = $this->planTime->hours * $this->time;

                return round($top/$bottom, 2);
            }
        );
    }

    public function getDailyPercentageAttribute(){
        $top = $this->rate * 24;

                $bottom = $this->planTime->hours * $this->time;

                return round($top/$bottom, 2);
    }

    public function image(): Attribute{
        return Attribute::make(
            get: function(){
                $images = [
                        'assets/open/assets/img/dadicate-web-hosting.svg',
                        'assets/open/assets/img/vps-hosting.svg',
                        'assets/open/assets/img/cloud-hosting.svg',
                        'assets/open/assets/img/cloud-hosting.svg',
                    ];

                return $images[array_rand($images)];
            }
        );
        
    }
    
    public function getTypeAttribute()
    {
        return false;
    }

    public function totalDuration(): Attribute{
        return Attribute::make(
            get: function(){
                return $this->time * $this->planTime->hours;
            }
        );
    }

    public function category()
    {
        return $this->belongsTo(PlanCategory::class, 'cat_id', 'id');
    }
}
