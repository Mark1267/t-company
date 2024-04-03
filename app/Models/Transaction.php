<?php

namespace App\Models;

use App\Models\Investment;
use App\Traits\TransactionTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, TransactionTraits;

    protected $table = 'transactions';

    protected $fillable = [
        'transaction_id', 'users_id', 'amount', 'company_address', 'reinvest', 
        'client_address', 'status', 'nature', 'plan_id', 'account_id', 'batch'
    ];

    public function investment(){
        return $this->hasOne(Investment::class, 'transactions_id', 'transaction_id');
    }

    public function plan(){
        return $this->hasOne(Plan::class, 'id', 'plan_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function currency(){
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function scopeDeposits($query)
    {
        return $query->where('nature', 1);
    }

    public function scopeWithdrawals($query)
    {
        return $query->where('nature', 0);
    }

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            if(!auth()->user()->admin){
                $model->users_id = auth()->user()->id;
            }
            $model->transaction_id = TransactionTraits::assignTransactionId();
    
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You added a Transaction'
            ]);

            toastr()->success('Transaction Added');
        });

        self::updating(function ($model) {
            if(!auth()->user()->admin){
                $model->users_id = auth()->user()->id;
            }
        });

        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a Transaction'
            ]);
            toastr()->success('Transaction Updated');
        });


        self::deleted(function(){
            toastr()->success('Transaction Deleted');

            Feed::create([
                'type' => 'success',
                'message' => 'Transaction Deleted Successfully'
            ]);
        });
    }
}
