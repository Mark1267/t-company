<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'name', 'address', 'network', 'symbol', 'users_id'
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Currency'
            ]);

            toastr()->success('Currency Added');
        });
        
        self::updating(function ($model) {
            
            $model->users_id = auth()->user()->id;
            
        });
        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Currency'
            ]);
            toastr()->success('Currency Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Currency'
            ]);
            toastr()->success('Currency Deleted');
        });
    }
}
