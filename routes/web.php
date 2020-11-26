<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personalController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('personal', [personalController::class, 'index'])->name('personal.index');

Route::post('personal', [personalController::class, 'registrar'])->name('personal.registrar');

Route::get('personal/eliminar/{lp}', [personalController::class, 'eliminar'])->name('personal.eliminar');

Route::get('personal/editar/{lpp}', [personalController::class, 'editar'])->name('personal.editar');
