<?php

namespace App\Services\Admin\Settings;

use App\Models\Team;
use App\Services\FileUpload;
use Illuminate\Http\Request;


class TeamService {
    protected $location = 'storage/team/';

    public function store(Request $request): array{
        if($request->file('image')){
            $image = (new FileUpload())->upload($request->file('image'), $this->location);
        }else{
            return [false, 'Please Select an Image file.'];
        }
        $member = Team::create([
            'image' => $image,
            'name' => $request->name,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkdin' => $request->linkdin,
            'twitter' => $request->twitter,
            'google' => $request->google,
            'rank' => $request->rank
        ]);

        return ['true', $member];
    }

    public function update(Request $request, $id){
        $data = Team::where('id', $id);
        if($request->has('image') && $request->file('image')){
            $image = (new FileUpload())->upload($request->file('image'), $this->location);
        }else{
            $image = $data->first()->image;
        }

        $member = $data->update([
            'image' => $image,
            'name' => $request->name,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkdin' => $request->linkdin,
            'twitter' => $request->twitter,
            'google' => $request->google,
            'rank' => $request->rank
        ]);

        return $member;
    }
}