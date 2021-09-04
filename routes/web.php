<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'login'])->name('user.login');
Route::resource('fincas', App\Http\Controllers\FincaController::class);
Route::resource('pilotos', App\Http\Controllers\PilotoController::class);
Route::resource('unidades', App\Http\Controllers\UnidadeController::class);
Route::resource('solicitudes', App\Http\Controllers\SolicitudeController::class);
Route::resource('programados', App\Http\Controllers\ProgramadoController::class);