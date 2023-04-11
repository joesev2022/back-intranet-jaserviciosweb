<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoColaborador;

class TipoColaboradorController extends Controller
{
    //
    public function get_all_tipo_colaboradores(){
        //Obtengo a los profesiones desde la BD
        $tipoColaboradores = TipoColaborador::all();
        //Retorno una respuesta json con los profesiones y con código 200
        return response()->json([
            'tipoColaboradores' => $tipoColaboradores
        ], 200);
    }
}
