<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Post;
use App\Models\OpenContact;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Notifications\Contact\NewTicket;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index(){
        
        return view('pages.index', [
            'news' => Post::orderBy('created_at', 'desc')->limit(6)->get(),
            'deposits' => Transaction::where('nature', 1)->where('status', 1)->limit(15)->get(),
            'withdrawals' => Transaction::where('nature', 0)->where('status', 1)->limit(15)->get()
        ]);
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function services(){
        $services = Post::where('post_categories_id', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.service', compact('services'));
    }
    
    public function teams(){
        return view('pages.teams');
    }
    
    public function contact(){
        return view('pages.contact');
    }
    public function terms(){
        return view('pages.terms');
    }
    public function affiliate(){
        return view('pages.plans');
    }
    public function faq(){
        return view('pages.faq');
    }

    public function contactSave(Request $request){
        $message = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required',
            // 'terms' => 'accepted'
        ]);

        if($message->fails()){
            return back()->with('error', "Something went wrong");
        }else{
            $client = OpenContact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            $client->notify(new NewTicket($client));
            return back()->with('success', "We have recieved your message");
        }
    }
    
    public function plans(){
        return view('pages.plans', [
            'plans' => Plan::orderBy('min', 'asc')->get()
        ]);
    }

    public function exclusivePlans(){
        return view('pages.plans', [
            'plans' => Plan::orderBy('min', 'asc')->get()
        ]);
    }

    public function developer(){
        return view('pages.readme');
    }
}
