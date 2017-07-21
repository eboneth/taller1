<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Panel Administrador</title>
    
    @include('design.estilos')
</head>
<body>
@include('design.cabecera')
    <div id="app">
    @if (Auth::guest())
        @include('design.menu')
    @else
        @include('design.menuCpanel')
    @endif
        <div class="seccion">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
</body>
</html>
