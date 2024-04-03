<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feed;
use App\Models\User;
use App\Mail\TemplateMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Jobs\SendNewletterJob;
use App\Models\Mail as MailModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailTemplateController extends Controller
{
    public function index(){
        return view('dashboard.admin.mail.index', [
            'templates' => MailModel::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    public function view($template_id){
        return view('dashboard.admin.mail.view', [
            'template' => MailModel::find($template_id)
        ]);
    }

    public function private($template_id){
        return view('dashboard.admin.mail.private', [
            'users' => User::orderBy('created_at', 'desc')->get(),
            'template' => MailModel::where('id', $template_id)->first(),
        ]);
    }

    public function privateSend(Request $request){
        $request->validate([
            'users_id' => 'required|numeric',
            'template_id' => 'required|numeric'
        ]);

        $this->sendMail($request->users_id, $request->template_id);

        return redirect()->route('admin.mail.index');
    }

    public function publicSend($template_id){
        $users = User::where('admin', 0)->orderBy('created_at', 'desc')->get();
        foreach($users as $user){
            $this->sendMail($user->id, $template_id);
        }
        toastr()->info('Mail Job Created');
        return redirect()->route('admin.mail.index');
    }

    public function add(){
        return view('dashboard.admin.mail.add',[
            'user' => User::where('id', $this->userId())->first()->toArray()
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'subject' => 'required|string|unique:mails,subject',
            'message' => 'required'
        ]);

        MailModel::create([
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('admin.mail.index');
    }
    
    public function edit($template_id){
        return view('dashboard.admin.mail.edit',[
            'template' => MailModel::find($template_id),
            'user' => User::find($this->userId())->toArray()
        ]);
    }

    public function editSave(Request $request){
        $request->validate([
            'subject' => 'required|string|unique:mails,subject,' . $request->template_id,
            'message' => 'required'
        ]);

        MailModel::where('id', $request->template_id)->update([
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('admin.mail.index');
    }

    public function delete($template_id){
        $template = MailModel::find($template_id);

        $template->delete();

        return back();
    }

    private function sendMail($users_id, $template_id){
        $user = User::where('id', $users_id)->first();
        $p_user = $user->toArray();
        $template = MailModel::find($template_id);
        foreach($p_user as $key => $value){
            $data = "#" . $key . "#";
            $template->message = Str::replace($data, $value, $template->message);
        }
        
        Mail::to($user->email, $user->full_name)->send(new TemplateMail($template, $user));
    }
}
