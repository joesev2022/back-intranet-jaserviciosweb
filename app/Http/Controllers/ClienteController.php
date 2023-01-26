<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //Funcion para obtener clientes
    public function get_all_clientes(){
        //Obtengo a los clientes desde la BD
        $clientes = Cliente::with('pais')->orderBy('id','DESC')->get();
        //Retorno una respuesta json con los clientes y con código 200
        return response()->json([
            'clientes' => $clientes
        ], 200);
    }

    //Funcion para buscar clientes
    public function search_clientes(Request $request){
        $search = $request->get('s');
        if($search != null){
            $clientes = Cliente::where('nombre', 'LIKE', "%$search%")->get();
            return response()->json([
                'clientes' => $clientes
            ], 200); 
        } else {
            return $this->get_all_clientes();
        }
    }

    //Funcion para registrar clientes
    public function store_cliente(Request $request) {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;
        $cliente->email = $request->email;
        $cliente->pais_id = $request->pais_id;
        $cliente->direccion = $request->direccion;
        $cliente->descripcion = $request->descripcion;
        $cliente->save();
        return response()->json([
            'cliente' => $cliente,
            'mensaje' => 'Cliente registrado correctamente.'
        ], 200); 
    }

    //Funcion para pasar datos de cliente a la página de edición
    public function edit_cliente($id) {
        $cliente = Cliente::findOrFail($id);
        return response()->json([
            'cliente' => $cliente
        ], 200); 
    }

    //Funcion para actualizar cliente
    public function update_cliente(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->celular = $request->celular;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->descripcion = $request->descripcion;
        $cliente->update($request->all());
        return response()->json([
            'cliente' => $cliente,
            'mensaje' => 'Cliente actualizado correctamente.'
        ], 200); 
    }

    //Funcion para eliminar un cliente
    public function delete_cliente($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    }
}
