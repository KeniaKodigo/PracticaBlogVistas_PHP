<?php

use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\OpinionesController;
use Illuminate\Support\Facades\Route;

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
    return view('plantilla');
});
/** Asignando rutas 
 *  A cada ruta le asignamos un name() para utilizarlo en las redirecciones y en las acciones de los
 *  formularios.
*/
Route::get('/administradores', [AdministradoresController::class, 'index'])->name('getAdmin');
Route::get('/registrar', [AdministradoresController::class, 'obtenerFormulario'])->name('formulario');
Route::post('/guardarAdministrador',[AdministradoresController::class, 'store'])->name('guardar');
Route::get('/editar/{id}', [AdministradoresController::class, 'obtenerFormularioActualizado'])->name('editar');
Route::put('/actualizar/{id}',[AdministradoresController::class, 'update'])->name('actualizar');
Route::delete('/eliminar/{id}',[AdministradoresController::class, 'destroy'])->name('eliminar');

/** ruta de opiniones */
Route::get('/opiniones',[OpinionesController::class, 'index'])->name('getOpiniones');
