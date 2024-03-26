<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\ReseniaController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('autor', [AutorController::class, 'index']);
Route::get('autor/{id}', [AutorController::class, 'show']);
Route::post('autor', [AutorController::class, 'store']);
Route::patch('autor/{id}', [AutorController::class, 'update']);
Route::delete('autor/{id}', [AutorController::class, 'destroy']);

Route::get('resenia', [ReseniaController::class, 'index']);
Route::get('resenia/{id}', [ReseniaController::class, 'show']);
Route::post('resenia', [ReseniaController::class, 'store']);
Route::patch('resenia/{id}', [ReseniaController::class, 'update']);
Route::delete('resenia/{id}', [ReseniaController::class, 'destroy']);

Route::get('usuario', [UsuarioController::class, 'index']);
Route::get('usuario/{id}', [UsuarioController::class, 'show']);
Route::post('usuario', [UsuarioController::class, 'store']);
Route::patch('usuario/{id}', [UsuarioController::class, 'update']);
Route::delete('usuario/{id}', [UsuarioController::class, 'destroy']);
