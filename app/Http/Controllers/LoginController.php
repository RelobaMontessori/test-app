<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            session()->put($user->getAttributes());
            return "Pase usted";
        }
        else{
            return "Vade retro, anónimo";
        }
    }
    public function checkLoginLaravel(){
        $credenciales = request()->validate([
            'nombre_usuario' => ['required'],
            'contrasena' => ['required','min:6']
        ]);
        if (Auth::attempt(
            ["nombre_usuario"=>$credenciales['nombre_usuario'],
                "password"=>$credenciales['contrasena']]
        )) {
            request()->session()->regenerate();

            return redirect('/recetas');
        }
        return back()->withErrors([
            'nombre_usuario' => 'Credenciales incorrectas.',
        ])->onlyInput('nombre_usuario');
    }
}
