<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<div class="panel">
		<div class="panel-heading">NOTICIAS</div>
		<div class="panel-body">
			<div class="noticia">
				@if(count($noticias)<=0)
					<h4>No hay Noticias para mostrar<h4>
				@endif
				@foreach($noticias as $not)
				<div class="row">
  					<div class="col-sm-12 col-md-12">
    					<div class="thumbnail">
     						<div class="caption">
        						<h3>{{$not->titulo}}</h3>
        						<h6>{{$not->fecha}}</h6>
        						<p>{{$not->noticia}}</p>
        					</div>
    					</div>
  					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<div class="panel">
		<div class="panel-heading">EVENTOS</div>
		<div class="panel-body">
			<div class="noticia">
				@if(count($eventos)<=0)
					<h4>No hay eventos para mostrar<h4>
				@endif
				@foreach($eventos as $ev)
				<div class="row">
  					<div class="col-sm-12 col-md-12">
    					<div class="thumbnail">
     						<div class="caption">
        						<h3>{{$ev->titulo}}</h3>
        						<h6>{{$ev->fecha}} - {{$ev->hora}}</h6>
        						<p>{{$ev->lugar}}</p>
        					</div>
    					</div>
  					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
