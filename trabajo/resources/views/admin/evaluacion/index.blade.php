@extends ('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Evaluaciones sin Calificar</h4>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered ">
				<thead>
					<th>Id</th>
					<th>Cedula</th>
					<th>Nombres</th>
					<th>Correo</th>
					<th>Acciones</th>
				</thead>
				@if(count($evaluacion)<=0)
					<tr>
						<td colspan=5>No Existen Evaluaciones por calificar</td>
					</tr>
				@endif
				@foreach($evaluacion as $ev)
				<tr>
					<td>{{$ev->idempleados}}</td>
					<td>{{$ev->cedula}}</td>
					<td>{{$ev->nombres}}</td>
					<td>{{$ev->email}}</td>
					<td>
						<a href="#" data-target="#modal-delete-{{$ev->idempleados}}" data-toggle="modal" ><button class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button></a>
					</td>
				</tr>
				@include('admin.evaluacion.modal')
				@endforeach
				
			</table>
		</div>
		{{$evaluacion->render()}}
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h4>Lista de Calificados</h4>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered ">
				<thead>
					<th>Id</th>
					<th>Cedula</th>
					<th>Nombres</th>
					<th>Correo</th>
					<th>Calificacion</th>
				</thead>
				<tbody>
					@if(count($evaluacion2)<=0)
					<tr>
						<td colspan=5>No hay registros por mostrar</td>
					</tr>
				@endif
				@foreach($evaluacion2 as $ev)
				<tr>
					<td>{{$ev->idempleados}}</td>
					<td>{{$ev->cedula}}</td>
					<td>{{$ev->nombres}}</td>
					<td>{{$ev->email}}</td>
					<td>{{$ev->calificacion}}</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		{{$evaluacion2->render()}}
	</div>
</div>
@endsection