<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
	protected $guarded=['id','esAdmin','contrasena'];
	//protected $fillable=['nombre_usuario','nombre','apellidos','correo','experiencia'];
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
    public function recetas(){
        return $this->hasMany(Receta::class);
    }
}
//Usuario::create(['nombre'=>"Francisco",'apellidos'=>"Francisquez",'esAdmin'=>TRUE]);
//$variable=new Usuario;
//$variable->nombre="Francisco";
