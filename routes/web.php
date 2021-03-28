<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoresControlles;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [TutoresControlles::class, 'create'])->name('formulario.create');
route::get('formulario', [TutoresControlles::class, 'store'])->name('formulario.store');
