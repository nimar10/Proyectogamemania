@extends('plantilla.plantilla')
@section('titulo')
    Accesorios
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container">
        <div class="row" id="detallee">
            <div class="col mb-4">
                <div class="card" id="cartaDetalle">
                    <img src="{{ asset($accesorio->imagen) }}" class="card-img-top rounded-pill " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $accesorio->nombre }} {{ $accesorio->modelo }}</h5>
                        <h4 class="card-title">({{ $accesorio->marca }})</h4>
                        <p class="card-text">{{ $accesorio->descripcion }}</p>
                        <a href="{{ route('accesorios.index') }}"
                            class="btn btn-block btn-success rounded-pill float-left">Regresar a accesorios
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
