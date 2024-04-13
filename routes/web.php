<?php

use Illuminate\Support\Facades\Route;
use app\Http\ControllersControllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/creacioncuentas', [CuentaController::class, 'create'])->name('cuentas.create');
Route::get('/creacionclientes', function () {
    return view('creacionclientes');
});





Route::get('/manejador', [App\Http\Controllers\ClienteController::class, 'store'])->name('manejador.create');

Route::get('/manejadorCuenta', [App\Http\Controllers\ClienteController::class, 'almacenarCuenta'])->name('manejador.almacenar');

Route::get('/manejadorTransaccion', [App\Http\Controllers\ClienteController::class, 'realizarTransaccion'])->name('manejador.transaccion');

Route::get('/movimientos', [App\Http\Controllers\ClienteController::class, 'formulariomovimientos'])->name('manejador.formulariomovimientos');

Route::get('/creacioncuenta', [App\Http\Controllers\ClienteController::class, 'formulariocuenta'])->name('manejador.formulariocuenta');

Route::get('/vistacuenta', [App\Http\Controllers\ClienteController::class, 'consultaSaldo'])->name('manejador.consultaSaldo');

Route::get('/consultaSaldo', [App\Http\Controllers\ClienteController::class, 'mostrarSaldo'])->name('manejador.mostrarSaldo');