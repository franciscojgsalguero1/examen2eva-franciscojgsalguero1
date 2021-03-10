<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenDocenteController;

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

Route::get('formulario', [CenDocenteController::class, 'index']);
Route::get('formulario/{formulario}', [CenDocenteController::class, 'show']);
Route::post('formulario', [CenDocenteController::class, 'store']);
Route::put('formulario/{formulario}', [CenDocenteController::class, 'update']);
Route::delete('formulario/{formulario}', [CenDocenteController::class, 'delete']);
