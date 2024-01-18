<?php

use App\Models\Usuario;
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

Route::get('/test/test/test/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/pruebaDB', function () {

	$results = DB::select('SELECT * FROM usuarios');
	$mensaje="";
	foreach ($results as $row) {
		$mensaje=$mensaje.$row->nombre_usuario."<br>";
	}
    return view('prueba',[
		'variableDeRuta' => $mensaje
	]);
});

Route::get('/pruebaWildcards/{x}', function ($mensaje) {
	if($mensaje=="dameError"){
		abort(500);
	}
	if($mensaje=="redireccioname"){
		return redirect('/test');
	}
	return view('prueba',[
		'variableDeRuta' => $mensaje
	]);
})->where(['x'=>'[A-z]*']);

Route::get('/creaUsuario/{nombre_usuario}', function($nombre){
    $user=Usuario::create(
        ['nombre_usuario'=> $nombre,'nombre'=>"Felipe",'apellidos'=>"Felipez",
            'correo'=>"unCorreo@a.com"]
    );
    //$user->nombre_usuario=$nombre;
	//$user->nombre="Guillermo";
	//$user->apellidos="Reloba Lopez";
	//$user->correo="unCorreo@a.com";
    $user->save();
    return "Ok";
});

Route::get('/buscaUsuario/{user:nombre_usuario}', function(Usuario $user){
    return view('prueba',[
        'variableDeRuta' => $user
    ]);
});
