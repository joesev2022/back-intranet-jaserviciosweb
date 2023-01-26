<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function get_all_paises(){
        //Obtengo a los clientes desde la BD
        $paises = Pais::all();
        //Retorno una respuesta json con los clientes y con código 200
        return response()->json([
            'paises' => $paises
        ], 200);
    }
}
