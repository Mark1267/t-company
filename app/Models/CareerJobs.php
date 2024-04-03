<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerJobs extends Model
{
    use HasFactory;

    protected $table = 'career_jobs';

    protected $fillable = ['title', 'description', 'mode', 'min', 'max', 'fee', 'users_id'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public static function boot() {

        parent::boot();

        self::creating(function($model){
            $model->users_id = auth()->user()->id;
        });

        self::created(function(){
            Feed::create([
                'type' => 'success',
                'message' => auth()->user()->username . ' Created a Job',
            ]);
            toastr()->success('Career Added');

        });
        
        self::updated(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You updated a career'
            ]);
            toastr()->success('Career Updated');
        });

        self::deleted(function(){
            Feed::create([
                'type' => 'success',
                'message' => 'You Deleted a Career'
            ]);
            toastr()->success('Career Deleted');
        });
    }
}
