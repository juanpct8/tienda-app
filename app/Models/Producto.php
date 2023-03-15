<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /* protected $fillable = ['nombre', 'categoria', 'marca', 'descripcion']; */

    protected $guarded = [];

   /*  public function getRouteKeyName()
    {
        return 'name';
    } */
}

