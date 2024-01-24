<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    public function ingredientes(){
        return $this->hasMany(Ingrediente::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
