<?php

namespace App\Http\Controllers\Admin\Settings\Site;

use App\Models\Review;
use App\Services\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\Site\ReviewRequest;

class ReviewController extends Controller
{
    protected $location = 'storage/review/';
    public function all(){
        return view('dashboard.admin.setting.site.review.index', [
            'reviews' => Review::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function add(){
        return view('dashboard.admin.setting.site.review.add');
    }

    public function addSave(ReviewRequest $request){
        if($request->file('image')){
            $image = (new FileUpload())->upload($request->file('image'), $this->location);
        }
        // dd($image);
        // $request->merge(['image' => $image]);
        // Review::create($request->except('_token'));
        Review::create([
            'image' => $image ?? 'NULL', 
            'name' => $request->name, 
            'review' => $request->review, 
            'stars' => $request->stars, 
            'rank' => $request->rank
        ]);

        return redirect()->route('admin.settings.site.reviews.all');
    }

    public function update($id){
        return view('dashboard.admin.setting.site.review.edit', [
            'review' => Review::where('id', $id)->first()
        ]);
    }

    public function updateSave($id, ReviewRequest $request){
        $data = Review::find($id);
        if($request->has('image') && $request->file('image')){
            $image = (new FileUpload())->upload($request->file('image'), $this->location);
        }else{
            $image = $data->image;
        }
        // $request->merge(['image' => $image]);
        // Review::where('id', $id)->update($request->except('_token'));
        Review::where('id', $id)->update([
            'image' => $image, 
            'name' => $request->name, 
            'review' => $request->review, 
            'stars' => $request->stars, 
            'rank' => $request->rank,
        ]);

        return redirect()->route('admin.settings.site.reviews.all');
    }

    public function delete($id){
        $review = Review::find($id);

        $review->delete();

        return redirect()->route('admin.settings.site.reviews.all');
    }
}
