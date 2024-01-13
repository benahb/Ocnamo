<?php

namespace App\Http\Controllers;

use App\models\Actu;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{



    public function accueil()
    {

        return view('accueil');
    }

    public function apropos()
    {
        return view('apropos');

    }


    public function menu()
    {
        return view('menu');
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function contact()
    {
        return view('contact');
    }


    // public function cartemenuController()
    // {
        // return view('cartemenu');
    // }

    public function cartemenu()
    {
        $categories = ['Petits déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('cartemenu', [
            'categories' => $categories,
        ]);
    }

}

