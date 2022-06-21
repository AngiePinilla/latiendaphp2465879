<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar ña varianble de sesion cart
        //var_dump(session('cart'));
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //estructurar la informacion del producto en un arreglo

        $producto = [
            "nombre" => $request->prod_nom,
            "id" => $request->prod_id,
            "cantidad" => $request->cantidad
        ];

        if(!session('cart')){
            //no existe la variable session
             //crear variable session 'cart'
            session([ 'cart' => $producto ]);
        }else{
            //existe la variable session, extraer el contenido de la variable session 'cart

            $auxiliar = session('cart');
            //agregar el nuevo item al arreglo

            $auxiliar[] =$producto;
            //volver a crear la variable session cart, con el contenido  añadido

            session(['cart' => $auxiliar]);

        }

       

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        //echo"eliminar carrito";

        //Eliminar la session cart

        session()->forget('cart');
    }
}
