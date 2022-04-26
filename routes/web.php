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
//Primera ruta, se llama get se permiten mostrar en el navegador es un metodo estatico, solo se necesita el npmbre del metodo de la clase
//tiene parametros, solocita el metodo get el nombre de la ruta
Route::get('hola' , function(){
             echo ("holi la primera ruta");
});