<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
	protected $guarded=['id','esAdmin'];
	//protected $fillable=['nombre_usuario','nombre','apellidos','correo','experiencia'];
    public function comentarios(){
        return $this->hasMany(Comentario::class,'id_usuario');
    }
    public function recetas(){
        return $this->hasMany(Receta::class,'id_usuario');
    }
    public function setContrasenaAttribute($pwd){
        $this->attributes['contrasena']=bcrypt($pwd);
    }

}

