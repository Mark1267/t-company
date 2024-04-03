<?php

namespace App\Http\Controllers\Admin\Settings\Site;

use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\Site\FAQRequest;

class FAQController extends Controller
{
    public function all(){
        return view('dashboard.admin.setting.site.faq.index', [
            'FAQs' => FAQ::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function add(){
        return view('dashboard.admin.setting.site.faq.add');
    }

    public function addSave(FAQRequest $request){
        FAQ::create($request->except('_token'));

        return redirect()->route('admin.settings.site.faq.all');
    }

    public function update($id){
        return view('dashboard.admin.setting.site.faq.edit', [
            'faq' => FAQ::where('id', $id)->first()
        ]);
    }

    public function updateSave($id, FAQRequest $request){
        FAQ::where('id', $id)->update($request->except('_token'));

        return redirect()->route('admin.settings.site.faq.all');
    }

    public function delete($id){
        $FAQ = FAQ::find($id);

        $FAQ->delete();

        return redirect()->route('admin.settings.site.faq.all');
    }
}
