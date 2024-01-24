<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    public function receta(){
        return $this->belongsTo(Receta::class);
    }
    public function comentario(){
        return $this->belongsTo(Comentario::class);
    }
    public function respuestas(){
        return $this->hasMany(Comentario::class);
    }
}
