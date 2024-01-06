<?php

namespace App\Http\Controllers;

use App\models\Actu;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function accueilController()
    {

        return view('accueil');
    }

    public function aproposController()
    {
        return view('apropos');

    }

    public function expertController()
    {
        return view('expert');
    }

    public function menuController()
    {
        return view('menu');
    }

    public function reservationController()
    {
        return view('reservation');
    }

    public function contactController()
    {
        return view('contact');
    }


    // public function cartemenuController()
    // {
        // return view('cartemenu');
    // }

    public function cartemenuController()
    {
        $categories = ['Petit déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('cartemenu', [
            'categories' => $categories,
        ]);
    }

}

