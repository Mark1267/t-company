<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    
    protected $table = 'mails';

    protected $fillable = [
        'subject',
        'users_id',
        'message',
    ];

    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::created(function () {
    
            toastr()->info('Mail Created');
            Feed::create([
                'message' => 'You added a mail template',
                'status' => 'success'
            ]);
    
        });


        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::updated(function () {
    
            toastr()->info('Mail Updated');
            Feed::create([
                'message' => 'You updated a mail template',
                'status' => 'success'
            ]);
    
        });

        self::deleted(function () {
    
            toastr()->info('Mail Deleted');
            Feed::create([
                'message' => 'You deleted a mail template',
                'status' => 'success'
            ]);
    
        });
    
    }
}
