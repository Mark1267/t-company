<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'users_id','title', 'body',
        'post_categories_id', 'image',
        'published', 'sub_title'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function category(){
        return $this->hasOne(PostCategories::class, 'id', 'post_categories_id');
    }

    
    public static function boot() {

        parent::boot();
    
        self::creating(function ($model) {
    
            $model->users_id = auth()->user()->id;
            $model->published = 1;
    
        });

        self::created(function(){
            toastr()->success('You have successfully added a new post');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully added a new post'
            ]);
        });

        self::updating(function ($model) {
    
            $model->users_id = auth()->user()->id;
            $model->published = 1;
    
        });

        
        self::updated(function(){
            toastr()->success('You have successfully updated a post post');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully updated a post post'
            ]);
        });

        
        self::deleted(function(){
            toastr()->success('You have successfully added a new post');
            Feed::create([
                'type' => 'success',
                'message' => 'You have successfully added a new post'
            ]);
        });
    
    }
}
