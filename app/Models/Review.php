<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable=['image', 'name', 'review', 'stars', 'rank', 'user_id'];

    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->user_id = auth()->user()->id ?? 1;
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Review'
            ]);

            toastr()->success('Review Added');
        });

        self::updating(function ($model) {
    
            $model->user_id = auth()->user()->id ?? 1;
    
        });
    
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Review'
            ]);

            toastr()->success('Review Updated');
        });
    }
}
