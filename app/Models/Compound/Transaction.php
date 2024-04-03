<?php

namespace App\Models\Compound;

use App\Models\Feed;
use App\Models\User;
use App\Models\Account;
use App\Models\Compound\Plan;
use App\Traits\TransactionTraits;
use App\Models\Compound\Investment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, TransactionTraits;

    protected $table = 'compound_transactions';

    protected $fillable = [
        'transaction_id', 'users_id', 'amount', 'company_address', 'status',
        'compound_plans_id', 'account_id', 'extension_id', 'reinvest'
    ];

    public function investment(){
        return $this->hasOne(Investment::class, 'transactions_id', 'transaction_id');
    }

    public function plan(){
        return $this->hasOne(Plan::class, 'id', 'compound_plans_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function currency(){
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function getHowManyExtensionsAttribute()
    {
        return Transaction::where('extension_id', $this->transaction_id)->count();
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