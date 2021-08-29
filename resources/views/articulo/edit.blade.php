@extends('layouts.plantillabase');

@section('contenido')
    <h2>EDITAR REGISTROS</h2>
    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1" >
        </div>
        <div class="mb3">
            <label for="" class="form-label">Marca</label>
            <input id="marca" name="marca" type="text" class="form-control" value="{{$articulo->marca}}" tabindex="2" >
        </div>
        <div class="mb3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="3" >
        </div>
        <div class="mb3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$articulo->cantidad}}" tabindex="4" >
        </div>
        <div class="mb3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" value="{{$articulo->precio}}" tabindex="5" >
        </div>
        
            <a href="/articulos" class="btn btn-secondary" tabindex="6">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
        
    </form>
@endsection