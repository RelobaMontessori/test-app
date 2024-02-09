<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function muestraReceta($id){
        return view('receta',[
            'receta'=>Receta::where('id',$id)->get()[0]
        ]);
    }
    public function addComentario($id){
        $formulario= request()->validate([
            'comentario' => ['required', 'max:500'],
            'valoracion' => ['lt:6', 'gt:0']
        ]);
        Comentario::create([
            'id_receta'=>$id,
            //'id_usuario'=>session('id'),
            'id_usuario'=>1,
            'texto'=>$formulario['comentario'],
            'valoracion'=>$formulario['valoracion']
        ]);
        return redirect('/receta/'.$id);
    }
    public function addReceta(){
        $formulario= request()->validate([
            /*'nombre' => ['required', 'max:600'],
            'texto' => ['required', 'max:5000'],
            'tiempo' => ['required','number'],*/
            'imagen' => ['image','mimes:png,jpg,jpeg'],
            /*'dificultad' => [],
            'tipo' => []*/
        ]);
        $imageName = time().'.'.$formulario['imagen']->extension();

        // Public Folder
        $formulario['imagen']->move(public_path('images'), $imageName);
        return 'ok';

    }
}
