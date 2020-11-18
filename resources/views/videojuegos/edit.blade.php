@extends('plantilla.plantilla')
@section('titulo')
    Videojuegos
@endsection
@section('cabecera')
@endsection
@section('contenido')

<div class="container" id="centrarform">



    <form name="editar" method='POST' action="{{ route('videojuegos.update', $videojuego) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row pt-3">
            <label for="nombre" class="col-sm-2 col-form-label"><b>Nombre: </b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" value="{{ $videojuego->nombre }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="compañia" class="col-sm-2 col-form-label"><b>Compañia: </b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="compañia" value="{{ $videojuego->compañia }}">
            </div>
        </div>

        <div class="form-row mt-3">
            <label for="nombre" class="col-sm-2 col-form-label"><b>Modelo Consola: </b></label>
            <div class="col">
                <select name="consola_id" class="form-control">
                    @foreach ($consolas as $item)
                        <option value selected="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="descripcion" class="col-sm-2 col-form-label"><b>Descripcion: </b></label>
            <div class="col-sm-10">
                <textarea cols="40" rows="5" class="form-control"
                    name="descripcion">{{ $videojuego->descripcion }}</textarea>
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="imagen" class="col-sm-2 col-form-label"><b>Imagen: </b></label>
            <div class="col-sm-10">
                <img src="{{ asset($videojuego->imagen) }}" width="40vw" height="40vh" class="rounded-circle mr-3">
                <button type='file' name='imagen' accept="image/*">Selecciona una imagen</button>
            </div>
        </div>

        <div class="form-group row mt-5 ">
            <div class="col-sm-10 m-auto">
                <input type="submit" class="btn btn-primary  btn-block mb-3 float-left " value="Editar videojuego">
                <a href="{{ route('videojuegos.index') }}" class="btn btn-warning btn-block mb-3 float-right">Volver a
                    Juegos</a>
            </div>
        </div>
    </form>

</div>
@endsection
