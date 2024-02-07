<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecetaController;
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
        return view('index');
});

Route::get('/sesion',function(){
   return session('nombre_usuario');
});

Route::get('/receta/{receta}',[RecetaController::class,'muestraReceta']);
Route::post('/receta/{receta}',[RecetaController::class,'addComentario']);

Route::get('/recetas',function () {
    return view('recetas',[
        "recetas"=>Receta::all()
    ]);
});

Route::get('/registro',[RegistroController::class,'miMetodo']);

Route::post('/registro',[RegistroController::class,'crearUsuario']);

Route::get('/login',[LoginController::class,'muestraForm']);

Route::post('/login',[LoginController::class,'checkLogin']);
