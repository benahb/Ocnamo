<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\Etiquette;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $table = 'plats';
    protected $primarykey = 'id';
   
    public function categories()
     {
        return $this->belongsTo(categorie::class, 'categories_id','id')
        ->get();
     }

     public function etiquettes()
     {
         return $this->belongsToMany(Etiquette::class, 'etiquettes_plats', 'etiquettes_id', 'plats_id')->get();
     }
}
