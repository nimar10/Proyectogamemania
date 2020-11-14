@extends('plantilla.plantilla')
@section('titulo')
Consolas
@endsection
@section('cabecera')
@endsection
@section('contenido')



    <div class="container">
        {{-- <div class="card-img mt-5" style="background: url('../img/consolas/consolas.jpg')"> --}}
            <div class="card-body">
                <form name="editar" method='POST' action="{{route('consolas.update', $consola)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" value='{{ $consola->nombre }}' name='nombre' required>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" value='{{ $consola->marca }}' name='marca' required>
                        </div>

                    </div>
                    <div class="form-row mt-2">
                                <div class="col">
                                    <input type="text" class="form-control" value='{{ $consola->modelo }}' name='modelo' required>
                                </div>

                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="textarea" class="form-control" value='{{ $consola->descripcion }}' name='descripcion'
                                required>
                        </div>
                    </div>


                    <div class="form-row mt-3">
                        <div class="col">
                            <img src="{{asset($consola->imagen)}}" width="40vw" height="40vh" class="rounded-circle mr-3">
                            <b>Imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
                        </div>
                    </div>

                    <div class="form-row mt-5 float-right">
                        <div class="col">
                            <input type="submit" value="Modificar Consola" class="btn btn-success mr-3">
                            <a href="{{ route('consolas.index') }}" class="btn btn-info">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        {{-- </div> --}}
    </div>


@endsection
