<?php

namespace App\Models;

use App\Traits\ContactTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'user_contacts';

    protected $fillable = [
        'users_id','ref', 'read',
        'message', 'subject'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }
    
    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id ?? null;
            $model->ref = ContactTraits::assignTicketRef();
    
        });

        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id ?? null;
    
        });

        self::deleted(function(){
            toastr()->success('Ticket Deleted');

            Feed::create([
                'type' => 'success',
                'message' => 'Ticket Deleted Successfully'
            ]);
        });
    
    }
}
