<?php

use Illuminate\Support\Facades\Route;

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



Route::get("servicio/controller/areas","App\Http\Controllers\ReserviController@areas");


Route::get("servicio/controller/casos","App\Http\Controllers\ReserviController@casos");


Route::get("servicio/controller/contacto","App\Http\Controllers\ReserviController@contacto");

Route::get("servicio/controller/equipo","App\Http\Controllers\ReserviController@equipo");


Route::get("servicio/controller/reservi","App\Http\Controllers\ReserviController@reservi");


Route::get("servicio/controller/inicio","App\Http\Controllers\ReserviController@inicio");

