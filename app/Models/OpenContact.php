<?php

namespace App\Models;

use App\Traits\ContactTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpenContact extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'open_contacts';

    protected $fillable = [
        'name', 'email', 'subject', 
            'phone', 'message', 'ref'
    ];


    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->ref = ContactTraits::assignTicketRef();
    
        });

    }
}
