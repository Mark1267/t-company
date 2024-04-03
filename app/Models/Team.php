<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'facebook', 'linkdin', 'twitter', 'instagram', 'google', 'rank', 'image'
    ];

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
                'message' => 'You added a Team member'
            ]);

            toastr()->success('Team Member Added');
        });

        self::updating(function ($model) {
    
            $model->user_id = auth()->user()->id ?? 1;
    
        });
    
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Team member'
            ]);

            toastr()->success('Team Member Updated');
        });
    }
}
