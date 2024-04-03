<?php

namespace App\Models\Compound;

use App\Models\Feed;
use App\Models\Compound\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investment extends Model
{
    use HasFactory;

    protected $table = 'compound_investments';

    protected $fillable = [
        'users_id', 'main_user', 'start', 'next_interval',
        'end', 'transactions_id', 'pause_date', 'paused',
        'status', 'continue'
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->start = now();
            $model->users_id = auth()->user()->id; //id of the admin that strated the investment
            $model->paused = false;
    
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
