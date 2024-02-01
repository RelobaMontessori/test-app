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
}
