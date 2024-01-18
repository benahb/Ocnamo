<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'nom,'=> 'required',
            'email'=> 'required',
            'message'=>'required',
        ]);


        $contact = new Contact();

        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->message = $request->message;


        $contact->save();

        return redirect()->route('contactSend')->with('success', 'le message a bien été envoyer');
    }
}
