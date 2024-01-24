<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
    public function receta(){
        return $this->belongsTo(Receta::class,'id_receta');
    }
    public function comentario(){
        return $this->belongsTo(Comentario::class,'id_comentario');
    }
    public function respuestas(){
        return $this->hasMany(Comentario::class);
    }
}
