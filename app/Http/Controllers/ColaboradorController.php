<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    //
    public function get_all_colaboradores(){
        //Obtengo a los profesiones desde la BD
        $colaboradores = Colaborador::all();
        //Retorno una respuesta json con los profesiones y con código 200
        return response()->json([
            'colaboradores' => $colaboradores
        ], 200);
    }
}
