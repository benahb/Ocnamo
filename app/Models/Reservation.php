<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    

    protected $table = 'reservations';
    protected $primarykey = 'id';
    public $incrementing = true;
    public $timestamps = false;



    protected $fillable = 
    [
        'nom ',
        'couvert',
        'heure',
        'jour',
        'telephone',
        'commentaire',

    ];
}
