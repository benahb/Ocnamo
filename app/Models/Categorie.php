<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primarykey = 'id';

    public function plats()
    {
        return $this->hasMany(Plat::class, 'categories_id','id')->get();
    }
}
