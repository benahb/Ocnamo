<?php

namespace App\Http\Controllers;

use App\models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use App\Models\Etiquette;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{



    public function accueil()
    {
        $actus = Actu::all();
        return view('accueil', [
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


    public function cartemenu()
    {
        // $categories = ['Petits déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];
        $categories = Categorie::all();

        return view('cartemenu', [
            'categories' => $categories,
        ]);
    }

    public function plat(int $id)
    {
        $plat = Plat::find($id);

        return view ('plat', [
           'plat' => $plat,
        ]);
    }
   


    // public function cartemenuController()
    // {
        // return view('cartemenu');
    // }


}

