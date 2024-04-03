<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Reply;
use App\Models\Contact;
use App\Mail\NewAdminTicket;
use Illuminate\Http\Request;
use App\Events\Ticket\ReplyEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contacts(){
        return view('dashboard.admin.ticket.index', [
            'users' => User::where('admin', 0)->orderBy('created_at', 'desc')->get(),
            'tickets' => Contact::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function newSave(Request $request){
        $new_ticket = Validator::make($request->all(),
        [
            'subject' => 'required|string',
            'users_id' => 'required|numeric',
            'message' => 'required'
        ]);

        if($new_ticket->fails()){
            toastr()->error('Message Not Sent, try again');
            return back();
        }else{
            $client = User::where('id', $request->users_id)->first();
            Mail::to($client->email, $client->full_name)->send(new NewAdminTicket($request, $client));

            toastr()->success($client->username . ' contacted successfully');
            return back();
        }
    }

    public function reply($ticket_ref){

        return view('dashboard.admin.ticket.reply', [
            'ticket' => Contact::where('ref', $ticket_ref)->first()
        ]);
    }

    public function replySave(Request $request){
        $request->validate([
            'subject' => 'required|string',
            'user_contact_id' => 'required|numeric',
            'message' => 'required'
        ]);

        $reply = Reply::create([
            'user_contact_id' => $request->user_contact_id,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        event(new ReplyEvent($reply));

        return redirect()->route('admin.contact.all');
    }

    public function delete($ticket_ref){
        $ticket = Contact::where('ref', $ticket_ref)->first();

        $ticket->delete();

        return back();
    }
}
