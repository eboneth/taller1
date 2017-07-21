<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Direccion de Talento Humano</title>

        @include('design.estilos')
    </head>
    <body>
        @include('design.cabecera')
        @include('design.menu')
        <div class="container">
            @include('design.slider')
            @include('design.contenido')
        </div>
        <div class="footer">
            @include('design.footer')
        </div>

    </body>
</html>
