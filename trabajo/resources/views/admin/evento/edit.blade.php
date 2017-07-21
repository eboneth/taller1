@extends ('layouts.app')
@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Evento {{$evento->titulo}}</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($evento,['method'=>'PATCH','route'=>['evento.update',$evento->ideventos]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" name="fecha" value="{{$evento->fecha}}" class="form-control">
			</div>
			<div class="form-group">
				<label for="hora">Hora</label>
				<input type="time" name="hora" value="{{$evento->hora}}" class="form-control">
			</div>
			<div class="form-group">
				<label for="titulo">Titulo</label>
				<input type="text" name="titulo" value="{{$evento->titulo}}" class="form-control">
			</div>
			<div class="form-group">
				<label for="lugar">Lugar</label>
				<input type="text" name="lugar" value="{{$evento->lugar}}" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::Close()!!}
			
		</div>
	</div>
@endsection
