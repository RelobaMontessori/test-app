<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function miMetodo(){
        $algo=false;
        if($algo){
            return view('index');
        }
        else{
            return view('formularioRegistro');
        }
    }

    public function crearUsuario(){
        $parametros=request()->validate([
            'nombre_usuario'=>[ 'required','min:4', 'max:50' ],
            'nombre'=>['required', 'max:50'],
            'apellidos'=>['required', 'max:50'],
            'correo'=>['required','email:rfc,dns'],
            'experiencia'=>['required'],
            'contrasena'=>['required','min:6']
        ]);
        $usuario=Usuario::create($parametros);
        session()->put($usuario->getAttributes());
        return session()->all();
    }
}
