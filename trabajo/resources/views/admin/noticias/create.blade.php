@extends ('layouts.app')
@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Noticia</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'admin/noticias','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
			<div class="form-group">
				<input type="hidden" name="id" value="{{ Auth::user()->id }}">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" name="fecha" class="form-control">
			</div>
			<div class="form-group">
				<label for="titulo">Titulo</label>
				<input type="text" name="titulo" class="form-control">
			</div>
			<div class="form-group">
				<label for="lugar">Noticia</label>
				<textarea name="noticia" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::Close()!!}
			
		</div>
	</div>
@endsection