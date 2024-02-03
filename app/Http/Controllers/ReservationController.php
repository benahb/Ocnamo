<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;



class ReservationController extends Controller

{

    private $heures = [
        // matin
        '12:00:00' => '12:00',
        '12:30:00' => '12:30',
        '13:00:00' => '13:00',
        '13:30:00' => '13:30',
        '14:00:00' => '14:00',
        '14:30:00' => '14:30',

        // midi
        '20:00:00' => '20:00',
        '20:30:00' => '20:30',
        '21:00:00' => '21:00',
        '21:30:00' => '21:30',
        '22:00:00' => '22:00',
        '22:30:00' => '22:30',
    ];

    public function reservation()

    {
        // $reservations = Reservation::all();
        return view('reservation', [
            'heures' => $this->heures,
        ]);
    }

    public function reservationStore(Request $request)
    {
        $heures = implode(',', $this->heures);


        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couvert' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaire' => 'nullable|min:10|max:1000',
        ]);

        // dd($validated);

        $reservation = new Reservation();
        $reservation->nom = $validated['nom'];
        $reservation->couvert = $validated['couvert'];
        $reservation->heure = $validated['heure'];
        $reservation->jour = $validated['jour'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaire = $validated['commentaire'];

        $reservation->save();

        // dd($reservation->id);

        return view('reservationStore', [
            'reservation' => $reservation,
        ]);
    }

    //admin/reservation
    public function reservationIndex()
    {
        $reservations = Reservation::all();
        return view('reservationIndex', ['reservations' => $reservations,]);
    }
    public function reservationShow(int $id)
    {
        $reservationShow = Reservation::find($id);

        return view('reservationShow', [
            'reservationShow' => $reservationShow,
        ]);
    }

    // public function DataInsert(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nom'=> 'required|min:3|max:50',
    //         'couvert'=> 'required|numeric|gte:1|lte:16',
    //         'heure'=> 'required',
    //         'jour'=> 'required|date|date_format:Y-m-d|after_or_equal:today',
    //         'telephone'=> 'required',
    //         'commentaire'=> '',
    //     ]);


    //     $data = $request->all();
    //     $nom = $request->input('nom');
    //     $couvert = $request->input('couvert');
    //     $heure = $request->input('heure');
    //     $jour = $request->input('jour');
    //     $telephone = $request->input('telephone');
    //     $commentaire = $request->input('commentaire');



    //     $isInsertSuccress = Reservation::insert(['nom'=>$nom, 'couvert'=>$couvert,
    //                                             'heure'=>$heure,
    //                                             'jour'=>$jour, 'telephone'=>$telephone,'commentaire'=>$commentaire
    //     ]);
    //         if ($isInsertSuccress) echo 
    //         '<h3>Votre reservation a été bien prise en compte</h3>';
    //         else echo 
    //         '<h3>Erreur votre reservation non valider!  reessayer</h3>';


    // }

}
