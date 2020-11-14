

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app3.css') }}">
    <title>Accesorios</title>
</head>

<body>
    <div class="container" id="centrarform">
        <form name="editar" method='POST' action="{{route('accesorios.update', $accesorio)}}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row pt-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" value="{{ $accesorio->nombre }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="marca" value="{{ $accesorio->marca }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" name="modelo" class="form-control" value="{{ $accesorio->modelo }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                    <textarea cols="40" rows="5" class="form-control" name="descripcion">{{ $accesorio->descripcion }}</textarea>
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-10">
                    <img src="{{ asset($accesorio->imagen) }}" width="40vw" height="40vh" class="rounded-circle mr-3">
                    <b>Imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-sm-10 m-auto ">
                    <input type="submit" class="btn btn-primary  btn-block mb-3 " value="Editar Accesorio">
                </div>
            </div>
        </form>
    </div>
</body>

</html>



