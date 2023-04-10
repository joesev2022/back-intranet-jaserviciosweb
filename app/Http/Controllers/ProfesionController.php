<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesion;

class ProfesionController extends Controller
{
    //
    public function get_all_profesiones(){
        //Obtengo a los profesiones desde la BD
        $profesiones = Profesion::all();
        //Retorno una respuesta json con los profesiones y con código 200
        return response()->json([
            'profesiones' => $profesiones
        ], 200);
    }

    public function store_profesion(Request $request) {
        $profesion = new Profesion();
        $profesion->nombre = $request->nombre;
        $profesion->save();
        return response()->json([
            'profesion' => $profesion,
            'mensaje' => 'Profesión registrado correctamente.'
        ], 200); 
    }
}
