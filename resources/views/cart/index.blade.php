@extends('layouts.menu')

@section('contenido')


<div class="row">
    <h1 class="deep-purple-text lighten-2" style="font-family: 'Days One', sans-serif;"  >Carrito de compras</h1>
</div>

@if(session('mensajes'))
<div class="row">
    <blockquote>
    <strong>
        <h3>{{ session('mensajes') }}
        <a href="{{ route('cart.index') }}" ></a></h3>
        
    </strong>
    </blockquote>
</div>
@endif


@if(session('cart'))

<div class="row">
    <div class="col s8">
        <table class="striped">
            <thead class="blue lighten-5">
                <tr class="deep-purple-text lighten-2">
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $producto)
                    <tr>
                        <td>{{ $producto[0]["nombre"] }}</td>
                        <td>{{ $producto[0]["cantidad"] }}</td>
                        <td>{{ $producto[0]["precio"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<strong>
    <blockquote>
<h3>No hay items en el carrito</h3>
    </blockquote>
</strong>

@endif
<div class="row">
    <form action="{{ route('cart.destroy',1) }}" method="POST">
        @method('DELETE')
        @csrf
        <br>
            <button class="waves-effect waves-light btn col s8 blue accent-1" type="submit">Eliminar Carrito
                <i class="material-icons right"></i>
            </button>    <br><br> <br>
               
                        
    </form>
</div>
@endsection