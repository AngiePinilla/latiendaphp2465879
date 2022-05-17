@extends ('layouts.menu')

@section ('contenido')
<div class="row">
    <h1 class=" deep-purple-text text-lighten-1 ">Nuevo producto</h1>
</div>
<div class="row">
    <form class="col s8" method="post" action="{{ route('productos.store') }}"> {{--url('productos')--}}
        @csrf
            {{--Nombre del producto--}}
            <div class="row">
                <div class="input-field col s8">
                    <label for="nombre">Nombre de producto</label>
                    <input type="text" placeholder="Nombre del producto" id="nombre" name="nombre">
                </div>
            </div> 
            {{--Descripcion del producto--}}
            <div class="row">
                <div class="input-filed col s8">
                <label for="desc">Descripcion de producto</label>
                <textarea class="materialize-textarea" placeholder="Descripcion del producto" id="desc" name="desc"></textarea>
                </div>
            </div>    
            {{--Precio del producto--}}
            <div class="row">
                <div class="input-filed col s8">
                <label for="precio">Precio de producto</label>
                <textarea class="materialize-textarea" placeholder="Precio del producto" id="precio" name="precio"></textarea>
                </div>
            </div> 
            {{--Cargar Imagen--}}
            <div class="row">
                <div class="file-field input-field col s8">
                    <div class="btn blue accent-1">
                        <span>imagen...</span>
                        <input type="file" name="imagen">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>   
            </div>  

            {{--Lista de marca--}}
            <div>
                <div class="row">
                    <div class="col s8 input-field">
                        <select name="marca" id="marca">
                        <option value="" disabled selected>Seleccione una Marca</option>
                            @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre_m }}</option>
                            @endforeach
                        </select>
                        <label for="marca">Marca</label>
                    </div>
                </div>
            </div>

            {{--Lista de categoria--}}
            <div class="row">
                <div class="input-field col s8">
                    <select name="categoria" id="categoria"> 
                            <option value="" disabled selected>Seleccione una categoría</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                    </select>    
                    <label>Selección de categoría</label>    
                </div>    
            </div>       

            {{--Boton de guardar--}}
            <div class="row">    
                <div class="s8">    
                        <button class="waves-effect waves-light btn col s8 blue accent-1" type="submit" name="action">Guardar
                            <i class="material-icons right"></i>
                        </button>     
                </div>    
            </div>
    </form>
</div>
@endsection