@extends('plantilla.plantilla')
@section('titulo')
    Consolas
@endsection
@section('cabecera')
@endsection
@section('contenido')


    <div class="container" id="centrarform">
        <form name="editar" method='POST' action="{{route('consolas.update', $consola)}}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row pt-3">
                <label for="nombre" class="col-sm-2 col-form-label"><b>Nombre: </b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" value="{{ $consola->nombre }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label"><b>Marca: </b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="marca" value="{{ $consola->marca }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label"><b>Modelo: </b></label>
                <div class="col-sm-10">
                    <input type="text" name="modelo" class="form-control" value="{{ $consola->modelo }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label"><b>Descripcion: </b></label>
                <div class="col-sm-10">
                    <textarea cols="40" rows="5" class="form-control" name="descripcion">{{ $consola->descripcion }}</textarea>
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-10">
                    <img src="{{ asset($consola->imagen) }}" width="40vw" height="40vh" class="rounded-circle mr-3">
                    <b>Imagen: </b><input type='file' name='imagen' accept="image/*">
                </div>
            </div>

             <div class="form-group row mt-5 mb-2 ">
                <div class="col-sm-10 m-auto">
                    <input type="submit" class="btn btn-primary  btn-lg mb-3 float-left " value="Editar Consola">
                <a href="{{route('consolas.index')}}" class="btn btn-warning btn-lg mb-3 float-right">Volver a Consolas</a>
                </div>
            </div>
        </form>
    </div>

@endsection
