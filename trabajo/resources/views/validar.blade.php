<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		@include('design.estilos')
        <title>Direccion de Talento Humano</title>       
    </head>
    <body>
        @include('design.cabecera')
        @include('design.menu')
        @include('flash::message')
        <div class="container">
            
            
        	<div class="seccion">
        	    
                
                
            	@include('design.validar')
            </div>
        </div>
		<div class="footer">
        	@include('design.footer')
		</div>
    </body>
</html>
