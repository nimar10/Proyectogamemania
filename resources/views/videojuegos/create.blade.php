@extends('plantilla.plantilla')
@section('titulo')
    Videojuegos
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container">

        <div class="card bg-darken-3 bg-center mt-5" style="background-image: url(../img/consolas/consolas.jpg)">


            <div class="card-body">
                <form name="crear" method='POST' action="{{ route('videojuegos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" required>
                        </div>

                        <div class="col">
                            <label for="compañia" class="col-form-label">Compañia</label>
                            <input type="text" name="compañia" class="form-control" placeholder="Compañia" id="compañia">
                        </div>

                    </div>

                    <div class="form-row mt-2">
                        <div class="col">
                            <label for="descripcion" class="col-form-label">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
                        </div>

                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <select name="consola_id" class="form-control">
                                @foreach ($consolas as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <label for="imagen" class="col-form-label">Imagen</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="submit" value="Crear" class="btn btn-success mr-3">
                            <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
                            <a href="{{ route('videojuegos.index') }}" class="btn btn-info">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
