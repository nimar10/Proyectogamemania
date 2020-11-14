@extends('plantilla.plantilla')
@section('titulo')
Videojuegos
@endsection
@section('cabecera')
@endsection
@section('contenido')



    <div class="container">
        <div class="card bg-darken-3 bg-center mt-5" style="background: url('../img/consolas/consolas.jpg')">
            <div class="card-body">
                <form name="editar" method='POST' action="{{route('videojuegos.update', $videojuego)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" value='{{ $videojuego->nombre }}' name='nombre' required>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" value='{{ $videojuego->compañia }}' name='compañia' required>
                        </div>

                    </div>
                    <div class="form-row mt-2">
                                <div class="col">
                                    <input type="text" class="form-control" value='{{ $videojuego->descripcion }}' name='descripcion' required>
                                </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <select name="consola_id" class="form-control">
                                @foreach ($consolas as $item)
                            <option value selected="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <img src="{{asset($videojuego->imagen)}}" width="40vw" height="40vh" class="rounded-circle mr-3">
                            <b>Imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
                        </div>
                    </div>

                    <div class="form-row mt-5 float-right">
                        <div class="col">
                            <input type="submit" value="Modificar Juego" class="btn btn-success mr-3">
                            <a href="{{ route('videojuegos.index') }}" class="btn btn-info">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
