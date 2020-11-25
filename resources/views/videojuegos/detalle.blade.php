@extends('plantilla.plantilla')
@section('titulo')
    Videojuegos
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <div class="card" id="cartaDetalle">
                    <img src="{{ asset($videojuego->imagen) }}" class="card-img-top rounded-pill" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videojuego->nombre }} {{ $videojuego->modelo }}</h5>
                        <h4 class="card-title">({{ $videojuego->consola->nombre }})</h4>
                        <p class="card-text">{{ $videojuego->descripcion }}</p>
                        <a href="{{ route('videojuegos.index') }}"
                            class="btn btn-block btn-success rounded-pill float-left">Regresar a videojuegos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
