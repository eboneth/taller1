@extends ('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de Noticias <a href="noticias/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Nueva Noticia</button></a></h4>
		@include('admin.noticias.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered ">
				<thead>
					<th>Id</th>
					<th>Fecha</th>
					<th>Titulo</th>
					<th>Noticia</th>
					<th>Opciones</th>
				</thead>
				@if(count($noticias)<=0)
					<tr>
						<td colspan=5>No existen noticias activas</td>
					</tr>
				@endif
				@foreach($noticias as $nt)
				<tr>
					<td>{{$nt->idnoticias}}</td>
					<td>{{$nt->fecha}}</td>
					<td>{{$nt->titulo}}</td>
					<td>{{$nt->noticia}}</td>
					<td>
						<a href="{{URL::action('NoticiaController@edit',$nt->idnoticias)}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="{{route('admin.noticias.destroy',$nt->idnoticias)}}" ><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>

		{{$noticias->render()}}
	</div>
</div>
@endsection