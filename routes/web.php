<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomRegisterController;

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



//usuarios crud

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/login', [UserController::class, 'login'])->name('usuarios.login');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/edit/{id}', [UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/update/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::delete('/ususrios/delete/{id}', [UserController::class, 'delete'])->name('usuarios.delete');





Auth::routes(['register'=> false]);

//custom register
Route::get('registration', [CustomRegisterController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomRegisterController::class, 'customRegistration'])->name('register.custom');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
