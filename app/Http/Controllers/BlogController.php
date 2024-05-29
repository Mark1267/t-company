<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategories;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function news(){
        $news = Post::whereNotIn('id', [2,3,4,5])->orderBy('created_at', 'desc')->paginate(20);
        $cats = PostCategories::all();
        return view('news.index', [
            'posts' => $news,
            'cats' => $cats
        ]);
    }

    public function signle($id){
        return view('news.read', [
            'post' => Post::find($id),
            'related' => Post::whereNotIn('id', [2,3,4,5])->orderBy('created_at', 'desc')->take(12)->get(),
            'cats' => PostCategories::all()
        ]);
    }

    public function sortByCategory($id)
    {
        $posts = Post::whereNotIn('id', [2,3,4,5])->where('post_categories_id', $id)->orderBy('created_at', 'desc')->paginate(15);
        return view('news.index', compact('posts'));
    }
}
