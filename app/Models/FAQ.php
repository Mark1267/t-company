<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FAQ extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'user_id'];

    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->user_id = auth()->user()->id ?? 1;
    
        });

        self::updating(function ($model) {
    
            $model->user_id = auth()->user()->id ?? 1;
    
        });
        
    
            self::created(function(){
                Feed::create([
                    'type' => 'success',
                    'message' => 'You added a FAQ'
                ]);
    
                toastr()->success('FAQ Added');
            });
        
            self::updated(function(){
                Feed::create([
                    'type' => 'success',
                    'message' => 'You updated a FAQ'
                ]);
    
                toastr()->success('FAQ Updated');
            });
    }
}
