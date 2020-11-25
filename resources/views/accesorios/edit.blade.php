@extends('plantilla.plantilla')
@section('titulo')
    Accesorios
@endsection
@section('cabecera')
@endsection
@section('contenido')


    <div class="container" id="centrarform">
        <form name="editar" method='POST' action="{{ route('accesorios.update', $accesorio) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row pt-3">
                <label for="nombre" class="col-sm-2 col-form-label"><b>Nombre: </b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" value="{{ $accesorio->nombre }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label"><b>Marca: </b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="marca" value="{{ $accesorio->marca }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label"><b>Modelo: </b></label>
                <div class="col-sm-10">
                    <input type="text" name="modelo" class="form-control" value="{{ $accesorio->modelo }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label"><b>Descripcion: </b></label>
                <div class="col-sm-10">
                    <textarea cols="40" rows="5" class="form-control"
                        name="descripcion">{{ $accesorio->descripcion }}</textarea>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="imagen" class="col-sm-2 col-form-label"><b>Imagen: </b></label>
                <div class="col-sm-10">
                    <input type='file' name='imagen' accept="image/*" id="textImg" />
                    <img src="{{ asset($accesorio->imagen) }}" width="40vw" height="40vh" class="rounded-circle mr-3"
                        id="imgt">
                </div>
            </div>

            <div class="form-group row mt-5 mb-2">
                <div class="col-sm-10 ml-auto mr-auto">
                    <input type="submit" class="btn btn-block btn-primary" value="Editar accesorios">
                    <a href="{{ route('accesorios.index') }}" class="btn btn-warning btn-block mb-2">Volver
                        Accesorios</a>
                </div>
            </div>
        </form>
    </div>

@endsection
