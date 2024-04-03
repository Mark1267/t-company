<?php

namespace App\Http\Controllers\User;

use App\Models\Feed;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Contact\NewTicket;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(){
        return view('dashboard.user3.contact', [
            'tickets' => Contact::where('users_id', $this->userId())->get()
        ]);
    }

    public function contactSave(Request $request){
        $message = Validator::make($request->all(),
        [
            'subject' => 'string|required',
            'message' => 'required'
        ]);

        if($message->fails()){
            toastr()->error('Ticket not created');
        }else{
            $ticket = Contact::create([
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            $user = $ticket->user;

            //$user->notify(new NewTicket($ticket));

            toastr()->success('Ticket created successfuly');
            Feed::create([
                'message' => 'Ticket created successfuly',
                'type' => 'success'
            ]);

            return back();
        }
    }

    public function delete($ticket_id){
        $ticket = Contact::find($ticket_id);

        $ticket->delete();
    }
}
