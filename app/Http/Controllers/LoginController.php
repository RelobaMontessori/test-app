<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function muestraForm(){
        return view('login');
    }
    public function checkLogin(){
        $loginOk=true;
        $parametros=request()->validate([
            'nombre_usuario'=>['required'],
            'contrasena'=>['required','min:6']
            ]);
        $user=Usuario::where('nombre_usuario',$parametros['nombre_usuario'])->get()[0];
        echo($user->nombre);
        echo("<br>");
        echo($user->apellidos);
        echo("<br>");
        echo($user->correo);
        echo("<br>");
        if($loginOk){
            return "Pase usted";
        }
        else{
            return "Vade retro, anónimo";
        }
    }
}
