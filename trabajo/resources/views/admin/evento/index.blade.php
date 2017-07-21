@extends ('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de Eventos <a href="evento/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Nuevo Evento</button></a></h4>
		@include('admin.evento.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered ">
				<thead>
					<th>Id</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Titulo</th>
					<th>Lugar</th>
					<th>Opciones</th>
				</thead>
				@if(count($eventos)<=0)
					<tr>
						<td colspan=6>No Existen Eventos Registrados</td>
					</tr>
				@endif
				@foreach($eventos as $ev)
				<tr>
					<td>{{$ev->ideventos}}</td>
					<td>{{$ev->fecha}}</td>
					<td>{{$ev->hora}}</td>
					<td>{{$ev->titulo}}</td>
					<td>{{$ev->lugar}}</td>
					<td>
						<a href="{{URL::action('EventoController@edit',$ev->ideventos)}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="{{route('admin.evento.destroy',$ev->ideventos)}}" data-target="#modal-delete-{{$ev->ideventos}}" data-toggle="modal" ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
					</td>
				</tr>
				@include('admin.evento.modal')
				@endforeach
			</table>
		</div>
		{{$eventos->render()}}
	</div>
</div>

@endsection