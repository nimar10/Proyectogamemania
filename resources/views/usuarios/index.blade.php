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
    <link rel="stylesheet" href="css/app3.css">
    <title>Lista de Usuarios</title>
</head>

<body class="lista">
    <div class="container" id="centrarform2">
        <div class="form-row">
            <h2 class=" mt-2 mb-2">Panel de los Usuarios</h2>
            <a href="{{route('home')}}" class="btn btn-warning float-right mt-2 mb-2 ml-2 rounded-pill"><b>Regresar al Inicio</b></a>
        </div>

        <div class="list-group">
            <h3 class="list-group-item list-group-item-action">Usuarios Registrados</h3>
            @foreach ($users as $item)

        <a  class="list-group-item list-group-item-action list-group-item-warning mb-3">
            Nombre: {{$item->name}} <br>
            Correo Electronico: ({{$item->email}}) <br>
            DNI : {{$item->dni}} <br>
            Telefono: {{$item->telefono}}
               <form class="form-inline float-right" name="del" action="{{route('usuarios.destroy',$item)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"  onclick="return confirm('¿Borrar Usuario?')" class="fas fa-trash 5x btn-danger btn-lg rounded-circle"></button>
                </form></a>
                @endforeach
        </div>
    </div>

</body>

</html>
