<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserWalletList extends Model
{
    use HasFactory;

    protected $table = 'user_wallet_list';

    protected $fillable = [
        'address', 'account_id', 'user_id'
    ];

    
    public function user():HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            if(auth()->check()){
                if(!auth()->user()->admin)
                    $model->user_id = auth()->user()->id ?? 1;
            }
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Wallet Address'
            ]);

            toastr()->success('Wallet Address Added');
        });

        self::updating(function ($model) {
    
            if(auth()->check()){
                if(!auth()->user()->admin)
                    $model->user_id = auth()->user()->id ?? 1;
            }
    
        });
    
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Wallet Address'
            ]);

            toastr()->success('Wallet Address Updated');
        });
    }
}
