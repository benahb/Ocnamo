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

    public function formcreate(Request $request)
    {
        $data = $request->all();
        $nom = $request->input('nom');
        $email = $request->input('email');
        $message = $request->input('message');

        $isInsertSuccress = Contact::insert(['nom'=>$nom, 
                            'email'=>$email,
                            'message'=>$message
        
    ]);
        if($isInsertSuccress) echo 
        '<h1>Message envoyé</h1>';
        else echo '<h1>Erreur message non envoyer</h1>';

    }
    

      


    // {
    //     $request->validate([
    //         'nom,'=> 'required',
    //         'email'=> 'required',
    //         'message'=>'required',
    //     ]);


    //     $contact = new Contact();

    //     $contact->nom = $request->nom;
    //     $contact->email = $request->email;
    //     $contact->message = $request->message;


    //     $contact->save();

    //     return redirect()->route('contactSend')->with('success', 'le message a bien été envoyer');
    // }
}
