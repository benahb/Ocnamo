<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    

    public $table = 'reservations';
    public $primarykey = 'id';
    public $incrementing = true;
    public $timestamps = false;



    protected $fillable = 
    [
        'name ',
        'couvert',
        'heure',
        'jour',
        'telephone',
        'commentaire',

    ];
}
