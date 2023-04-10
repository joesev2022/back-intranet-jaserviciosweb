<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{
    //
    public function get_all_niveles(){
        //Obtengo a los profesiones desde la BD
        $niveles = Nivel::all();
        //Retorno una respuesta json con los profesiones y con código 200
        return response()->json([
            'niveles' => $niveles
        ], 200);
    }
}
