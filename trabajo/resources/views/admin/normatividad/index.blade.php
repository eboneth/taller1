@extends ('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Listado de PDF´s <a href="normatividad/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Nuevo PDF</button></a></h4>
		@include('admin.normatividad.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered ">
				<thead>
					<th>Id</th>
					<th>Nombre PDF</th>
					<th>URL</th>
					<th>Grupo al que pertenece</th>
					<th>Opciones</th>
				</thead>
				@if(count($norma)<=0)
					<tr>
						<td colspan=6>No Existen PDF Registrados</td>
					</tr>
				@endif
				@foreach($norma as $norm)
				<tr>
					<td>{{$norm->id_normatividad}}</td>
					<td>{{$norm->nombre_pdf}}</td>
					<td>{{$norm->url_pdf}}</td>
					<td>{{$norm->norma}}</td>
					<td>
						<a href="{{URL::action('NormatividadController@edit',$norm->id_normatividad)}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button></a>
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$norma->render()}}
	</div>
</div>
@endsection