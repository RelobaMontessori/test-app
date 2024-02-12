<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
	public function recetas(){
		return $this->belongsToMany(Receta::class,'ingredientes-recetas','id_ingrediente','id_receta');
	}
}
