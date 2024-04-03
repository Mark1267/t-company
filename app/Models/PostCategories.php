<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;

    protected $table = 'post_categories';

    protected $fillable = [
        'users_id','title', 'body'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function posts(){
        return $this->hasMany(Post::class, 'post_categories_id', 'id');
    }

    public function getPostCountAttribute()
    {
        return $this->posts()->count();
    }

    
    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        self::created(function(){
            toastr()->success('You have successfully added a new category');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully added a new category'
            ]);
        });

        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id;
    
        });

        
        self::updated(function(){
            toastr()->success('You have successfully updated a post category');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully updated a post category'
            ]);
        });

        
        self::deleted(function(){
            toastr()->success('You have successfully added a new category');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully added a new category'
            ]);
        });
    
    }
}
