<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //RELACIONAR PRODUCTO CON MARCA
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    //RELACIONAR PRODUCTO CON CATEGORIA
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
