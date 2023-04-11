<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProfesionController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TipoColaboradorController;
use App\Http\Controllers\ColaboradorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_all_clientes', [ClienteController::class, 'get_all_clientes']);
Route::get('/search_clientes', [ClienteController::class, 'search_clientes']);
Route::post('/store_cliente', [ClienteController::class, 'store_cliente']);
Route::post('/update_cliente/{id}', [ClienteController::class, 'update_cliente']);
Route::get('/edit_cliente/{id}', [ClienteController::class, 'edit_cliente']);
Route::get('/delete_cliente/{id}', [ClienteController::class, 'delete_cliente']);

Route::get('/get_all_paises', [PaisController::class, 'get_all_paises']);

Route::get('/get_all_servicios', [ServicioController::class, 'get_all_servicios']);
Route::post('/store_servicio', [ServicioController::class, 'store_servicio']);

Route::get('/get_all_profesiones', [ProfesionController::class, 'get_all_profesiones']);
Route::post('/store_profesion', [ProfesionController::class, 'store_profesion']);

Route::get('/get_all_niveles', [NivelController::class, 'get_all_niveles']);

Route::get('/get_all_tipo_colaboradores', [TipoColaboradorController::class, 'get_all_tipo_colaboradores']);

Route::get('/get_all_colaboradores', [ColaboradorController::class, 'get_all_colaboradores']);
Route::post('/store_colaborador', [ColaboradorController::class, 'store_colaborador']);