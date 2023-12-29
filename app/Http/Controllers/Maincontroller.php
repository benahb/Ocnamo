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

   

}
