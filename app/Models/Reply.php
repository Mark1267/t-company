<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = 'user_contacts_reply';

    protected $fillable = [
        'users_id', 
        'user_contact_id',
        'message', 'subject'
    ];

    public function ticket(){
        return $this->hasOne(Contact::class, 'id', 'user_contact_id');
    }

    public function repliedBy(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id ?? null;
    
        });

        self::created(function(){
            Feed::create([
                'message' => 'Replied a User Ticket',
                'type' => 'success'
            ]);
            toastr()->success('Ticket Replied');
        });

        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id ?? null;
    
        });
    
    }
}
