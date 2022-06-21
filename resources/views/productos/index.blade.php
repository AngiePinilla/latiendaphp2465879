@extends('layouts.menu')

@section('contenido')

@if(session('mensaje'))
<div class="row">
    <blockquote>
    <strong>
        <h3>{{ session('mensaje') }}
        <a href="{{ route('cart.index') }}" >Ir al carrito</a></h3>
        
    </strong>
    </blockquote>
</div>
@endif



<div class="row">
    <h1 class="deep-purple-text lighten-2" style="font-family: 'Days One', sans-serif;"  >Catalogo de productos</h1>
</div>
    @foreach($productos as $producto)

    <div class="row">
        <div class="col s12 m7">
            <div class="card purple lighten-4">
                    <div class="card-image">
                        @if($producto->imagen === null)
                        <img src="{{ asset('img/no-disponible.jpg') }}" alt="">
                        @else
                        <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                        @endif 
                        <span class="card-title purple-text lighten-5">{{ $producto->nombre }}</span>          
                    </div>
                <div class="card-content">
                    <p>{{ $producto->desc }}</p>
                </div>
                <div class="card-action ">
                    <a class="purple-text darken-4" href="{{ route('productos.show', $producto->id) }}">Ver datalles</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection