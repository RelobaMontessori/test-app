<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class,'ingredientes-recetas','id_receta','id_ingrediente');
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
    public function comentarios(){
        return $this->hasMany(Comentario::class,'id_receta');
    }
}
