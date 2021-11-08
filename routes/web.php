<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\Documentacion\EncargadosController;

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







Auth::routes(['register'=> false]);

//custom register
Route::get('registration', [CustomRegisterController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomRegisterController::class, 'customRegistration'])->name('register.custom');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('status:2');
