<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Models\Usuario;
use App\Models\Receta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
	return view('welcome');
});

Route::get('/', function () {
    $sesionIniciada=false;
    if($sesionIniciada){
        return view('index');
    }
    else{
        return view('welcome');
    }

});

Route::get('/sesion',function(){
   return session('nombre_usuario');
});

Route::get('/buscaReceta/{receta}',function(Receta $receta){
    return view('prueba',[
        'variableDeRuta' => $receta
    ]);
});

Route::get('/registro',[RegistroController::class,'miMetodo']);

Route::post('/registro',[RegistroController::class,'crearUsuario']);

Route::get('/login',[LoginController::class,'muestraForm']);

Route::post('/login',[LoginController::class,'checkLogin']);
