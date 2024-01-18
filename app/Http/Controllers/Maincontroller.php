<?php

namespace App\Http\Controllers;

use App\models\Actu;
use App\Models\Categorie;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{



    public function accueil()
    {
        $actus = Actu::all();
        return view('accueil' , [
            'actus' => $actus,
        ]);
       
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

   


    // public function cartemenuController()
    // {
        // return view('cartemenu');
    // }

    public function cartemenu()
    {
        // $categories = ['Petits déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];
        $categories = Categorie::all();

        return view('cartemenu', [
            'categories' => $categories,
        ]);
    }

}

