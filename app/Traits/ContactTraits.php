<?php
namespace App\Traits;

use App\Models\Contact;

trait ContactTraits {
    public static function assignTicketRef()
    {
        $ticketRef = rand(100000, 999999);
        if(Contact::select()->where('ref' , '=', $ticketRef)->first()){
            $ticketRef = ContactTraits::assignTicketRef();
        }
        return $ticketRef; 
    }
}