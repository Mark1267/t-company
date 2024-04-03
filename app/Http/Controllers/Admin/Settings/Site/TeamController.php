<?php

namespace App\Http\Controllers\Admin\Settings\Site;

use App\Models\Team;
use App\Services\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Services\Admin\Settings\TeamService;
use App\Http\Requests\Admin\Settings\Site\TeamRequest;

class TeamController extends Controller
{
    public function all()
    {
        return view('dashboard.admin.setting.site.team.index', [
            'teams' => Team::all()
        ]);
    }

    public function add(){
        return view('dashboard.admin.setting.site.team.add');
    }

    public function addSave (TeamRequest $request){
        //Store Team Data
        $data = (new TeamService())->store($request);
        if(!$data[0]){
            toastr($data[1], 'error', 'Somthing went wroung');
            return back();
        }

        return redirect()->route('admin.settings.site.teams.all');
    }

    public function update($id){
        return view('dashboard.admin.setting.site.team.edit', [
            'team' => Team::find($id)
        ]);
    }

    public function updateSave($id, TeamRequest $request){
        (new TeamService())->update($request, $id);

        return redirect()->route('admin.settings.site.teams.all');
    }

    public function delete($id){
        $member = Team::find($id);
        File::delete($member->image);
        $member->delete();
        return redirect()->route('admin.settings.site.teams.all');
    }
}
