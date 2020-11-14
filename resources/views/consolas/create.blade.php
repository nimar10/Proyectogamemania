@extends('plantilla.plantilla')
@section('titulo')
    Consolas
@endsection
@section('cabecera')
@endsection
@section('contenido')

    <div class="container">

        <div class="card bg-darken-3 bg-center mt-5" style="background-image: url(../img/consolas/consolas.jpg)">


            <div class="card-body">
                <form name="crear" method='POST' action="{{ route('consolas.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" required>
                        </div>

                        <div class="col">
                            <label for="marca" class="col-form-label">Marca</label>
                            <input type="text" name="marca" class="form-control" placeholder="marca" id="marca">
                        </div>

                    </div>

                    <div class="form-row mt-2">
                        <div class="col">
                            <label for="modelo" class="col-form-label">Modelo</label>
                            <input type="text" name="modelo" class="form-control" placeholder="modelo" required>
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
                            <label for="imagen" class="col-form-label">Imagen</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="submit" value="Crear" class="btn btn-success mr-3">
                            <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
                            <a href="{{ route('consolas.index') }}" class="btn btn-info">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
