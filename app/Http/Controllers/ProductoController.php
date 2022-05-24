<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //1. Definir reglas de validadcion
        $reglas = [
            "nombre" =>'required|alpha',
            "desc" =>'required|min:10|max:50',
            "precio" =>'required|numeric',
            "marca" =>'required',
            "categoria" => 'required' 
        ];
        //Mensajes pernosalizados
        $mensajes = [
            "required" => "Campo abligatorio",
            "numeric" => "Solo numeros",
            "alpha" => "solo letras",
            "min" => "minimo 10 caracteres",
            "max" => "maximo 50 caracteres"
        ];
        //Crear el objeto validador

        $v = Validator::make($r->all(), $reglas, $mensajes);

        //Validar datos : metodo fails()
        //el metodo fails()-> retorna true en caso de que la validacion falle y falso en caso de vvalidadcion correcta
        if($v->fails()){
            //Validacion falla. Mostrar mensaje de validacion.Redireccionar al formulario
            return redirect('productos/create')->withErrors($v)->withInput();
        }else{
            //Validacion correcta
        

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
        //echo "El producto se ha guardado exitosamente";
        
        //REDIRECCIONAR A LA RUTA : CREATE

        return redirect('productos/create')->with('mensaje','Producto registrado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aqui va la informacion del producto con id que es: $producto";
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
