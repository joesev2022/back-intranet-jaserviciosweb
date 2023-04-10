<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    //
    public function get_all_servicios(){
        //Obtengo a los servicios desde la BD
        $servicios = Servicio::all();
        //Retorno una respuesta json con los servicios y con código 200
        return response()->json([
            'servicios' => $servicios
        ], 200);
    }

    public function store_servicio(Request $request) {
        $servicio = new Servicio();
        $servicio->titulo = $request->titulo;
        $servicio->descripcion_corta = $request->descripcion_corta;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();
        return response()->json([
            'servicio' => $servicio,
            'mensaje' => 'Servicio registrado correctamente.'
        ], 200); 
    }
}
