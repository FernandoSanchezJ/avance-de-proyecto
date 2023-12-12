<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\PNRController;
use App\Http\Controllers\TipoPNRController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComparativaController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\LlegadaController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ConsultasRelacionads;
use App\Http\Controllers\Vistas;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('carros', CarroController::class);
Route::resource('pnrs', PNRController::class);
Route::resource('tipopnrs', TipoPNRController::class); 
Route::resource('repartidores', RepartidorController::class); 
Route::resource('clientes', ClienteController::class); 
Route::resource('comparativas', ComparativaController::class); 
Route::resource('rutas', RutaController::class); 
Route::resource('llegadas', LlegadaController::class); 


// no se que pedo

Route::get('/backup', [BackupController::class, 'create']);
Route::get('/vistas/vista1', [Vistas::class, 'paqueteClienteInfo']);
Route::get('/vistas/vista2', [Vistas::class, 'comparativaPaquete']);
Route::get('/vistas/vista3', [Vistas::class, 'clienteCarroInfo']);
Route::get('/vistas/vista4', [Vistas::class, 'repartidorRutaInfo']);
Route::get('/vistas/vista5', [Vistas::class, 'usuariosPerfil']);
