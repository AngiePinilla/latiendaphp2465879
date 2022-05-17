<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //selecionar categorias y marcas
        $marcas = Marca::all();
        $categorias = categoria::all();
        
        return view('productos.new')->with('marcas', $marcas)->with('categorias', $categorias);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //echo "<pre>";
        //var_dump($r->all());
        //echo "</pre>";

        //asignar valores de atributos del nuevo atributo
        $p = new Producto;

        $p->nombre = $r->nombre;
        $p->desc = $r->desc;
        $p->precio = $r->precio;
        $p->marca_id = $r->marca;
        $p->categoria_id = $r->categoria;
        //grabar el nuevo producto
        $p->save();
        echo "El producto se ha guardado exitosamente";
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aquie va la informacion del producto con id que es: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui va el formulario de edicion del producto con id que es: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
