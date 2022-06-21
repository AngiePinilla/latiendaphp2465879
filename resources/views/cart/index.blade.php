@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>
<div class="row">
    <pre>{{var_dump(session('cart'))}}</pre>
    
</div>
<div class="row">
    <form action="{{ route('cart.destroy',1) }}" method="POST">
        @method('DELETE')
        @csrf
                        <button class="waves-effect waves-light btn col s8 blue accent-1" type="submit">Eliminar Carrito
                            <i class="material-icons right"></i>
                        </button>     
               
    </form>
</div>
@endsection