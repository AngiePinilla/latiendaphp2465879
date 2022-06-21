@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1>{{ $producto->nombre }}</h1>
</div>
<div class="row">
    <div class="col s8">
        <h4>Producto:</h4>
        @if($producto->imagen === null)
        <img src="{{ asset('img/no-disponible.jpg') }}" alt=""
        width="700" height="400">
        @else
        <img src="{{ asset('img/'.$producto->imagen) }}" alt="" width="700" height="400">
         @endif 

        <h4>Marca:</h4> <p>{{ $producto->marca->nombre_m }}</p>
        <h4>Categoria:</h4> <p>{{ $producto->categoria->nombre }}</p>
        <h4>Precio:</h4><p>${{ $producto->precio }}</p>
        <h4>Descripcion:</h4><p>{{ $producto->desc}}</p>
    </div>
    <div class="col s4">
        <div class="row">
            <h3>Añadir al carrito</h3>
        </div>
        <div class="row">
            <form action="{{ route('cart.store') }}" method="POST" >
                @csrf
                <input type="hidden" name="prod_id" value="{{ $producto->id }}">
                <input type="hidden" name="prod_nom" value="{{ $producto->nombre  }}">
                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="cantidad">Cantidad</label>
                    </div>
                    <div class="row">    
                       <div class="s8">    
                            <button class="waves-effect waves-light btn col s8 blue accent-1" type="submit" name="action">Agregar
                                <i class="material-icons right"></i>
                            </button>     
                        </div>    
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection