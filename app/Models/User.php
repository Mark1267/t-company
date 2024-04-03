<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email', 'bonus',
        'password',
        'full_name',
        'phone', 
        'username',
        'balance',
        'admin', 'transaction_PIN',
        'ref','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function feeds(){
        return $this->hasMany(Feed::class, 'users_id', 'id');
    }

    public function investments(){
        return $this->hasMany(Investment::class, 'users_id', 'id');
    }
    
    public function transaction(){
        return $this->hasMany(Transaction::class, 'users_id', 'id');
    }

    public function totalInvested(){
        return $this->transaction->sum('amount');
    }

    public function ref(){
        return $this->where('ref', $this->id);
    }

    public function refBy(){
        return $this->where('id', $this->ref);
    }

    public static function boot() {

        parent::boot();

        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated your Profile'
            ]);
            toastr()->success('Profile Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Profile'
            ]);
            toastr()->success('Currency Profile');
        });
    }

}
