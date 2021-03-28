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

Route::get('cendocentes', [CenDocenteController::class, 'index']);
Route::get('cendocentes/{cendocentes}', [CenDocenteController::class, 'show']);
Route::post('cendocentes', [CenDocenteController::class, 'store']);
Route::put('cendocentes/{cendocentes}', [CenDocenteController::class, 'update']);
Route::delete('cendocentes/{cendocentes}', [CenDocenteController::class, 'delete']);
