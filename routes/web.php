<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductoController;
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
            "Barranquilla",
            "Santa marta"
        ]],
         "peru"=>[
            "Capital" => "Lima",
            "Moneda" => "Guarani Paraguayo",
            "Poblacion" => 37.97,
            "Ciudades"=>[
                "Lima",
                "Cusco",
                "Arequipa"
            ]
         ],
         "paraguay"=>[
            "Capital" => "Asuncion",
            "Moneda" => "Pesos",
            "Poblacion" => 7.133,
            "Ciudades"=>[
                "Asuncion",
                "Encarnacion",
                
            ]

         ]
     ];
     //echo "<pre>";
     //var_dump($paises);
     //echo "<pre>";


     //mostrar la vista de paises
     return view('paises')->with("paises", $paises);  

}); 

Route::get('prueba', function(){
   return view('productos.new');
     });

//rutas REST
//Producto

Route::resource('productos' , ProductoController::class);


Route::resource('cart',CartController::class,['only'=>['store','destroy','index']]);
        