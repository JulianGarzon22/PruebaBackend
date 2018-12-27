<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <style>
            .navbar {
                background-color: #fff !important;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            }    
        </style>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container">
            <a class="navbar-brand" href="#">Prueba</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{route('inicio')}}">Inicio</a>
                    <a class="nav-item nav-link" href="{{route('comandos')}}">Agregar</a>
                    </div>
                </div>
            </div>
            </nav>
        @yield('content')
    </body>
</html>
