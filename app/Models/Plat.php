<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plat extends Model
{
    use HasFactory;

    protected $table = 'plats';
    protected $primarykey = 'id';
    public function categories()

    {
        return $this->belongsTo(categorie::class, 'categories_id','id')->get();
   }
}
