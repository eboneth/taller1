@extends ('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h3>Editar Normatividad {{$norma->titulo}}</h3>

		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		{!!Form::model($norma,['method'=>'PATCH','route'=>['normatividad.update',$norma->id_normatividad]])!!}
		{{Form::token()}}
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="nombre">Nombre PDF</label>
				<input type="text" name="nombrePDF" value="{{$norma->nombre_pdf}}" requerid class="form-control">
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label>Tipo Normatividad</label>
				<select name="id_tipo_norma" class="form-control">
					@foreach ($tipoNormas as $nor)
					<option value="{{$nor->id_tip_normat}}"> {{$nor->nombre_tipo}} </option>
					@endforeach
				</select>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="url">Subir PDF</label>
				<input type="file" name="url" class="form-control" value="{{$norma->url_pdf}}">
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
		{!!Form::Close()!!}

	</div>
</div>
@endsection
