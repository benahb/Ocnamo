<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primarykey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = 
    [
        'nom ',
        'email',
        'message',

    ];
}
