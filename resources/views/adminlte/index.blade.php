x   @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>AdminLTE Mostro</h1>
@stop

@section('content')
<h2>CREAR REGISTROS</h2>
<form action="/articulos" method="POST">
    @csrf
    <div class="mb3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" >
    </div>
    <div class="mb3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="2" >
    </div>
    <div class="mb3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" >
    </div>
    <div class="mb3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="4" >
    </div>
    <div class="mb3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" tabindex="5" >
    </div>
    
        <a href="/articulos" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop