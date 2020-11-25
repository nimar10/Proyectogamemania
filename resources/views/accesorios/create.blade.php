@extends('plantilla.plantilla')
@section('titulo')
    Accesorios
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container" id="centrarform">
        <form name="crear" method='POST' action="{{ route('accesorios.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pt-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-10">
                    <input type="text" name="marca" class="form-control" placeholder="marca" id="marca">
                </div>
            </div>
            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
                <div class="col-sm-10">
                    <input type="text" name="modelo" class="form-control" placeholder="modelo" required>
                </div>
            </div>
            <div class="form-row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <textarea type="areatext" cols="40" rows="5" name="descripcion" class="form-control"
                        required>introducir texto...</textarea>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                <div class="col-sm-10">
                    <input type="file" name="imagen" class="form-control" accept="image/*" id="textImg" />
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="submit" value="Crear" class="btn btn-success btn-block mr-3">
                    <input type="reset" value="Limpiar" class="btn btn-warning btn-block mr-3">
                    <a href="{{ route('accesorios.index') }}" class="btn btn-info btn-block mb-2">Volver</a>
                </div>
            </div>
        </form>
    </div>

@endsection
