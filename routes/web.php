<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProveedoresController;
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


Route::resource('/empleado', EmpleadoController::class);
Route::resource('/proveedores', ProveedoresController::class);
Route::resource('/productos', ProductoController::class);
Route::get('/inicio', InicioController::class ) -> name('Inicio');