
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil de {{ auth()->user()->name }} {{ auth()->user()->apellido }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app3.css')}}">
</head>

<body class="fondoperfil">
    <div class="container" id="perfilcontenedor">
        <div class="card shadow" id="perfilcarta" >
            <div class="card-body" >
                <img src="{{ asset('../img/logoD.png') }}" height="80px" width="80px" class="card-img-right rounded-pill float-right" alt="...">
                <h5 class="card-title">Nombre: {{ auth()->user()->name }} {{ auth()->user()->apellido }}</h5>
                <h5 class="card-title">Correo Electronico: {{ auth()->user()->email }}</h5>
                <h5 class="card-title">DNI: {{ auth()->user()->dni }}</h5>
                <h5 class="card-title">Telefono: {{ auth()->user()->telefono }}</h5>
                <h5 class="card-title">Fecha de Nacimiento: {{ auth()->user()->fecha_nacimiento }}</h5>
                <a href="{{ route('home') }}" class="btn btn-block btn-success rounded-pill">Regresar al inicio</a>
            </div>
        </div>
    </div>

</body>
</html>
