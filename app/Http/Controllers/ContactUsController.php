<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function saveContactUs(Request $request){
        $contact = new ContactUs();
        $contact->name=$request->user_name;
        $contact->email=$request->user_email;
        $contact->message=$request->message;
        $contact->save();   

        // $contact = new ContactUs();
        // $contact->name = $request->user_name;
        // $contact->email = $request->user_email;
        // $contact->message = $request->message;
    }
}
