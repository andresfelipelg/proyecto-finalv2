<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\Documentacion\EncargadosController;
use App\Http\Controllers\Documentacion\EmpresasController;
use App\Http\Controllers\Documentacion\ProveedoresController;
use App\Http\Controllers\Documentacion\Planes_emergenciasController;
use App\Http\Controllers\Documentacion\Riesgos_psicosocialesController;
use App\Http\Controllers\Documentacion\CompromisosController;

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
    return view('auth.login');
});



//usuarios crud

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/login', [UserController::class, 'login'])->name('usuarios.login');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/edit/{id}', [UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/update/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::delete('/ususrios/delete/{id}', [UserController::class, 'delete'])->name('usuarios.delete');

//cambiar estado al usuario
Route::get('/usuarios/status_edit/{id}', [UserController::class, 'status_edit'])->name('usuarios.status_edit');
Route::put('/usuarios/status_update/{id}', [UserController::class, 'status_update'])->name('usuarios.status_update');


//Documentacion CRUD encargados

Route::get('/encargados', [EncargadosController::class, 'index'])->name('encargados.index');
Route::get('/encargados/create', [EncargadosController::class, 'create'])->name('encargados.create');
Route::post('/encargados/store', [EncargadosController::class, 'store'])->name('encargados.store');

//Dcumentacion CRUD empresas

Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/create', [EmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas/store', [EmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/edit/{id}', [EmpresasController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/update/{id}', [EmpresasController::class, 'update'])->name('empresas.update');

//Documentacion CRUD proveedores

Route::get('/proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [ProveedoresController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores/store', [ProveedoresController::class, 'store'])->name('proveedores.store');

//Documentacion CRUD planes_emergencias
Route::get('/planes_emergencias', [Planes_emergenciasController::class, 'index'])->name('planes.index');
Route::get('/planes_emergencias/create', [Planes_emergenciasController::class, 'create'])->name('planes.create');
Route::post('/planes_emergencias/store', [Planes_emergenciasController::class, 'store'])->name('planes.store');

//Documentacion CRUD riesgos_psicosociales
Route::get('/riesgos_psicosociales', [Riesgos_psicosocialesController::class, 'index'])->name('riesgos.index');
Route::get('/riesgos_psicosociales/create', [Riesgos_psicosocialesController::class, 'create'])->name('riesgos.create');
Route::post('/riesgos_psicosociales/store', [Riesgos_psicosocialesController::class, 'store'])->name('riesgos.store');

//Documentacion CRUD compromisos

Route::get('/compromisos', [CompromisosController::class, 'index'])->name('compromisos.index');
Route::get('/compromisos/create', [CompromisosController::class, 'create'])->name('compromisos.create');
Route::post('/compromisos/store', [CompromisosController::class, 'store'])->name('compromisos.store');
Route::get('/compromisos/edit/{id}', [CompromisosController::class, 'edit'])->name('compromisos.edit');
Route::put('/compromisos/update/{id}', [CompromisosController::class, 'update'])->name('compromisos.update');



Auth::routes(['register'=> false]);

//custom register
Route::get('registration', [CustomRegisterController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomRegisterController::class, 'customRegistration'])->name('register.custom');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('status:2');
