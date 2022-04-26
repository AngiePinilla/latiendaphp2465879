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
//ruta de paises
Route::get('paises' , function(){
     $paises=[
        "colombia"=>[
            "Capital" => "Bogota",
            "Moneda" => "Pesos",
            "Poblacion" => 51.602,
        "Ciudades"=>[
            "Bogota",
            "Cali",
            "Barranquilla"
        ]],
         "peru"=>[
            "Capital" => "Lima",
            "Moneda" => "Guarani Paraguayo",
            "Poblacion" => 37.97,
            "Ciudades"=>[
                "Lima",
                "Cusco",
                "Areequipa"
            ]
         ],
         "paraguay"=>[
            "Capital" => "Asuncion",
            "Moneda" => "Pesos",
            "Poblacion" => 7.133,
            "Ciudades"=>[
                "Asuncion",
                "Encarnacion",
                "Ciuad del este"
            ]

         ]
     ];
     //echo "<pre>";
     //var_dump($paises);
     //echo "<pre>";


     //mostrar la vista de paises
     return view('paises')->with("paises", $paises);

});