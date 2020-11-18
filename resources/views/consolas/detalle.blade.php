@extends('plantilla.plantilla')
@section('titulo')
    Consolas
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container">
        <div class="row" id="detallee">
            <div class="col mb-4">
                <div class="card">
                <img src="{{asset($consola->imagen)}}"   class="card-img-top " alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$consola->nombre}} {{$consola->modelo}}</h5>
                    <h4 class="card-title">({{$consola->marca}})</h4>
                    <p class="card-text">{{$consola->descripcion}}</p>
                    <a href="{{route('consolas.index')}}" class="btn btn-block btn-success rounded-pill">Regresar a Consolas</a>
                    </div>
                </div>
            </div>
        </div>

    @endsection
