<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>CENTRAR UN DIV CON BOOTSTRAP 4.2.X </title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="h-100" style="background-image: url('./img/fondodetalle.jpg')">
    <div class="container h-50">
        <div class="row justify-content-center h-100">
            <div class="col-sm-8 align-self-center">

                     <div class="card shadow">
                    <div class="card-body">
                        <img src="{{asset('./img/logoD.png')}}" width="100px" height="100px" class="rounded-circle float-right">
                    <h5 class="card-title">Nombre: {{auth()->user()->name}} Apellidos: {{auth()->user()->apellido}}</h5>
                    <h5 class="card-title">Correo Electronico: {{auth()->user()->email}}</h5>
                    <h5 class="card-title">DNI: {{auth()->user()->dni}}</h5>
                    <h5 class="card-title">Telefono: {{auth()->user()->telefono}}</h5>
                    <h5 class="card-title">Fecha de Nacimiento: {{auth()->user()->fecha_nacimiento}}</h5>
                    <a href="{{route('home')}}" class="btn btn-block btn-success rounded-pill">Regresar al inicio</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



