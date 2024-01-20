<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;



class ReservationController extends Controller

{
    public function reservation()
    
    {
        // $reservations = Reservation::all();
        return view('reservation');
    }
    
    public function DataInsert(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'couvert'=> 'required',
            'heure'=> 'required',
            'jour'=> 'required',
            'telephone'=> 'required',
            'commentaire'=> 'required',
        ]);

        
        $data = $request->all();
        $name = $request->input('name');
        $couvert = $request->input('couvert');
        $heure = $request->input('heure');
        $jour = $request->input('jour');
        $telephone = $request->input('telephone');
        $commentaire = $request->input('commentaire');

       

        $isInsertSuccress = Reservation::insert(['name'=>$name, 'couvert'=>$couvert,
                                                'heure'=>$heure,
                                                'jour'=>$jour, 'telephone'=>$telephone,'commentaire'=>$commentaire
        ]);
            if ($isInsertSuccress) echo 
            '<h1>Votre reservation a été bien prise en compte</h1>';
            else echo 
            '<h1>Erreur votre reservation non valider!  reessayer</h1>';
            
      
    }
    
}
