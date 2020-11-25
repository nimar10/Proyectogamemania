@extends('plantilla.plantilla')
@section('titulo')
    Videojuegos
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container" id="centrarform">
        <form name="crear" method='POST' action="{{ route('videojuegos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pt-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="compañia" class="col-sm-2 col-form-label">Compañia:</label>
                <div class="col-sm-10">
                    <input type="text" name="compañia" class="form-control" placeholder="Compañia" id="compañia">
                </div>

            </div>

            <div class="form-row mt-2">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <textarea type="areatext" cols="40" rows="5" name="descripcion" class="form-control"
                        required>introducir texto...</textarea>
                </div>
            </div>

            <div class="form-row mt-3">
                <label for="consola_id" class="col-sm-2 col-form-label">Consola:</label>
                <div class="col-sm-2 col-form-label">
                    <select name="consola_id" class="form-control">
                        @foreach ($consolas as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                <div class="col-sm-10">
                    <input type="file" name="imagen" class="form-control" accept="image/*" id="textImg">
                </div>
            </div>

            <div class="form-row mt-3">
                <div class=" col-sm-10 ml-auto mr-auto ">
                    <input type="submit" value="Crear" class="btn btn-success btn-block ">
                    <input type="reset" value="Limpiar" class="btn btn-warning btn-block ">
                    <a href="{{ route('videojuegos.index') }}" class="btn btn-info btn-block mb-2">Volver</a>
                </div>
            </div>
        </form>

    </div>

@endsection
