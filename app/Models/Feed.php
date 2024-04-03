<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    
    protected $table = 'feeds';

    protected $fillable = [
        'type',
        'users_id',
        'message',
        'status',
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id ?? 1;
            $model->status = 0;
    
        });

        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id;
            $model->status = 0;
    
        });
    
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
