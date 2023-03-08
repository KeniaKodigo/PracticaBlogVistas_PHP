<?php

namespace App\Http\Controllers;

use App\Models\Opiniones;
use Illuminate\Http\Request;


class OpinionesController extends Controller
{
    /** obtener todas las opiniones y la consulta de busqueda */
    public function index(Request $request){
        $buscar = trim($request->post('buscar')); 
        
        $opiniones = Opiniones::join('articulos','opiniones.id_art','=','articulos.id')
                    ->select('articulos.titulo_articulo as titulo','nombre_opinion','correo_opinion','contenido_opinion','respuesta_opinion')
                    ->where('nombre_opinion','LIKE','%'.$buscar.'%')
                    ->paginate(2);
        
        return view("paginas.opiniones", compact('opiniones','buscar'));
    }
}
