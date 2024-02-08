<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;


class Usuario extends User
{
    use HasFactory, HasApiTokens, Notifiable;
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
    public function getAuthPassword()
    {
        return $this->attributes['contrasena'];
    }
    public function getAuthIdentifierName()
    {
        return 'nombre_usuario';
    }
    public function getAuthIdentifier()
    {
        return $this->nombre_usuario;
    }

}

