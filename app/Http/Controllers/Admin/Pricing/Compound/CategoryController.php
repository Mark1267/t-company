<?php

namespace App\Http\Controllers\Admin\Pricing;

use App\Models\Compound\CompoundPlanCategory as PlanCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    // protected $location = 'storage/pricing/categories/';

    public function all(){
        return view('dashboard.admin.pricing.compound.category.index', [
            'categories' => PlanCategory::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    public function add(){
        return view('dashboard.admin.pricing.compound.category.add'); //, ['types' => $this->types]);
    }

    public function addSave(Request $request){
        $request->validate([
            'title' => 'required|unique:plan_categories,title',
            // 'image' => 'required|mimes:png,jpg,jpeg,webm|max:2048',
            'body' => 'required|string',
            // 'type' => ['required', 'string', 'regex:(' . $this->types[0] . '|' . $this->types[1] . ')']
        ]);

        // if($request->file('image')){
        //     $file = $request->file('image');

        //     $filename = $file->hashName();
            
        //     // Upload file
        //     $file->move($this->location,$filename);
        // }

        PlanCategory::create([
            'title' =>$request->title,
            // 'image' =>$this->location.$filename,
            'body' =>$request->body,
            // 'type' => $request->type
        ]);

        return redirect()->route('admin.pricing.compound.category.all');
    }

    
    public function edit($category_id){
        return view('dashboard.admin.pricing.compound.category.edit', [
            'category' => PlanCategory::find($category_id),
            // 'types' => $this->types
        ]);
    }

    public function editSave($id, Request $request){
        $request->validate([
            'title' => 'required|unique:plan_categories,title,' . $id,
            // 'image' => 'nullable|mimes:png,jpg,jpeg,webm|max:2048',
            'body' => 'required|string',
            // 'type' => 'required|string'
        ]);

        // $locationFull = PlanCategory::where('id', $id)->first()->image;
        // if($request->has('image') && $request->file('image')){
        //     $file = $request->file('image');
        //     $filename = $file->hashName();
        //     // Upload file
        //     $file->move($this->location,$filename);
        //     $locationFull = $this->location.$filename;
        // }

        PlanCategory::where('id', $id)->update([
            'title' =>$request->title,
            // 'image' =>$locationFull,
            'body' =>$request->body,
            // 'type' => $request->type
        ]);

        return redirect()->route('admin.pricing.compound.category.all');
    }

    public function delete($category_id){
        $category = PlanCategory::find($category_id);
        // File::delete($category->image); //Delete Post Image
        $category->delete(); //Deleted Main Data
        
        return back();
    }
}
