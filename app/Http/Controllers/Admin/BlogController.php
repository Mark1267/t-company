<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostCategories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //Post Categories

    public function categoryAll(){
        $categories = PostCategories::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.admin.posts.category.index', [
            'categories' => $categories
        ]);
    }

    public function categoryAdd(){
        return view('dashboard.admin.posts.category.add');
    }

    public function categoryAddSave(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:50|unique:post_categories,title',
            'body' => 'required'
        ]);

        PostCategories::create($request->all());

        return redirect()->route('admin.categories.all');
    }
    
    public function categoryEdit($id){
        $category = PostCategories::find($id);

        return view('dashboard.admin.posts.category.edit', [
            'category' => $category
        ]);
    }
    
    public function categoryEditSave(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:50|unique:post_categories,title,' . $request->id,
            'body' => 'required'
        ]);
        
        PostCategories::where('id', $request->id)->update($request->except(['_token', 'id']));

        return redirect()->route('admin.categories.all');
    }

    public function categoryDelete($id){
        $category = PostCategories::find($id);

        $category->delete();

        return redirect()->route('admin.categories.all');
    }

    
    //Posts
    
    public function adminPostAll(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function adminPostAdd(){
        $categories = PostCategories::orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.posts.add', [
            'categories' => $categories
        ]);
    }

    public function adminPostAddSave(Request $request){
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webm|max:2048',
            'title' => 'required',
            'sub_title' => 'required|min:10',
            'body' => 'required',
            'cat_id' => 'required|numeric'
        ], [
            'cat_id.required' => 'Category must be selected',
            'cat_id.numeric' => 'Category must be selected'
        ]);

        if($request->file('image')){
            $file = $request->file('image');

            $filename = $file->hashName();
            $location = 'storage/posts/';

            // Upload file
            $file->move($location,$filename);
        }

        Post::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'post_categories_id' => $request->cat_id,
            'body' => $request->body,
            'image' => $location.$filename
        ]);

        return redirect()->route('admin.posts.all');
    }

    public function adminPostEdit($id){
        $post = Post::find($id);

        $categories = PostCategories::orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.posts.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function adminPostEditSave(Request $request){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webm|max:2048',
            'title' => 'required',
            'sub_title' => 'required|min:10',
            'body' => 'required',
            'cat_id' => 'required|numeric'
        ], [
            'cat_id.required' => 'Category must be selected',
            'cat_id.numeric' => 'Category must be selected'
        ]);

        $locationFull = Post::where('id', $request->id)->first()->image;
        if($request->has('image') && $request->file('image')){
            $file = $request->file('image');

            $filename = $file->hashName();
            $location = 'storage/posts/';

            // Upload file
            $file->move($location,$filename);
            $locationFull = $location.$filename;
        }
    

        Post::where('id', $request->id)->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'post_categories_id' => $request->cat_id,
            'body' => $request->body,
            'image' => $locationFull
        ]);

        return redirect()->route('admin.posts.all');
    }

    public function adminPostDelete($id){
        $post = Post::find($id);

        //Delete Post Image
        File::delete($post->image);

        //Delete Main Post
        $post->delete();

        return redirect()->route('admin.posts.all');
    }
}
