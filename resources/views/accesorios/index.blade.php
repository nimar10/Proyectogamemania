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
    <link rel="stylesheet" href="css/app.css">
    <title>GameMania</title>
</head>

<body
    style="background-image: url('img/fondoInicio.jpg');  background-repeat:no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="container">



        <div class="row mb-2 ">
            <nav class="navbar navbar-expand-md navbar bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brans">
                        <img src="img/logoD.png" width="50" height="50">
                    </a>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ config('app.name') }}
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @can('Admin')
                                            <p class="mr-2" style="float: left;">(Admin)</p>
                                        @else
                                            <p class="mr-2" style="float: left;">(Usuario)</p>
                                        @endcan
                                        {{ Auth::user()->name }} {{ Auth::user()->apellido }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @if (Auth::check())

                                            <a class="dropdown-item"
                                                href="{{ route('usuarios.show') }}">{{ __('Ver mi Perfil') }}
                                            </a>
                                        @endif

                                        @can('Admin')

                                            <a class="dropdown-item"
                                                href="{{ route('usuarios.index') }}">{{ __('Panel del usuario') }}</a>
                                        @endcan
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <!--Banner Slider-->
        <div class="row galeria p-0">

            <img src="img/accesorios/accesorios.jpg" class="card-img-bottom" alt="...">
        </div>
        <!--Menu-->
        <div class="row  mt-3">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" id="menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand fas fa-home f-3x" href="{{ route('home') }}"></a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('consolas.index') }}">Consolas <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('videojuegos.index') }}">Videojuegos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('accesorios.index') }}">Accesorios</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('accesorios.index') }}"
                        name="search">
                        <select name="nombre" class='form-control mr-5 mt-1' onchange="this.form.submit()">
                            <option value="%">Accesorios (Todos)</option>
                            @foreach ($acc as $item)
                                @if ($item == $request->nombre)
                                    <option selected>{{ $item }}</option>
                                @else
                                    <option>{{ $item }}</option>
                                @endif
                            @endforeach
                        </select>
                    </form>
                </div>
            </nav>
        </div>
        <!--Titulo productos-->
        <div class="row mt-1">
            <nav class="navbar navbar-dark bg-danger ">
                <a class="navbar-brand">
                    <img src="img/logoP.png" width="30" height="30" class="d-inline-block align-top" alt=""
                        loading="lazy">
                    Accesorios

                </a>

                @can('Admin')

                    <a href="{{ route('accesorios.create') }}" class="btn btn-warning  float-right"
                        style="font-weight:bold;">Añadir Accesorio</a>
                @endcan
            </nav>
        </div>


        <!--Productos-->
        <div class="row">

            <div class="card ">
                @foreach ($accesorios as $item)
                    <div class="row no-gutters mt-2 ">
                        <div class="col-md-4">
                            <img src="{{ asset($item->imagen) }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nombre }} {{ $item->modelo }} ({{ $item->marca }})</h5>
                                <p class="card-text">{{ $item->descripcion }}</p>
                                <p class="card-text"><a href="{{ route('accesorios.show', $item) }}">leer descripcion
                                </p></a>
                            </div>

                            @can('Admin')

                                <form class="form-inline ml-4" name="del" action="{{ route('accesorios.destroy', $item) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('accesorios.edit', $item) }}"
                                        class="btn btn-warning  ml-1"><b>Opciones</b> </a>
                                    <input type="submit" onclick="return confirm('¿Borrar Accesorio?')"
                                        class="btn btn-danger ml-2" value="Eliminar">
                                </form>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- Footer -->

            <footer id="footer1" class="mt-2">


                <div class="container">

                    <div class="row">


                        <div class="col-md-12 py-3">
                            <div class="mb-3 flex-center">

                                <!-- Facebook -->
                                <a class="fb-ic">
                                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic">
                                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic">
                                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Google +-->
                                <a class="gplus-ic">
                                    <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3" style="background-color: black; color:white">© 2020
                    Copyright.
                    <a class="text-center m-0 p-0"><b>Ruben saiz casado</b> </a>
                </div>

            </footer>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

</html>
