<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    //
    public function get_all_colaboradores(){
        //Obtengo a los profesiones desde la BD
        $colaboradores = Colaborador::with('profesion')->with('nivel')->orderBy('id','DESC')->get();
        //Retorno una respuesta json con los profesiones y con código 200
        return response()->json([
            'colaboradores' => $colaboradores
        ], 200);
    }

    public function store_colaborador(Request $request) {
        $colaborador = new Colaborador();
        $colaborador->nombre = $request->nombre;
        $colaborador->apellido = $request->apellido;
        $colaborador->celular = $request->celular;
        $colaborador->email = $request->email;
        $colaborador->pais_id = $request->pais_id;
        $colaborador->direccion = $request->direccion;
        $colaborador->nivel_id = $request->nivel_id;
        $colaborador->profesion_id = $request->profesion_id;
        $colaborador->tipo_colaborador_id = $request->tipo_colaborador_id;
        $colaborador->save();
        return response()->json([
            'colaborador' => $colaborador,
            'mensaje' => 'Colaborador registrado correctamente.'
        ], 200);
    }
}
