<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $table = 'investments';

    protected $fillable = [
        'users_id', 'main_user',
        'start',
            'end',
            'transactions_id',
            'status'
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->start = now();
            $model->users_id = auth()->user()->id; //id of the admin that strated the investment
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Started An Investment'
            ]);

            toastr()->success('Investment Started');
        });
    
    }

    // public function getMainUserAttribute()
    // {
    //     return $this->deposit->users_id;
    // }

    public function deposit(){
        return $this->hasOne(Transaction::class, 'transaction_id', 'transactions_id');
    }

    public function transaction(){
        return $this->hasOne(Transaction::class, 'transaction_id', 'transactions_id');
    }

}
