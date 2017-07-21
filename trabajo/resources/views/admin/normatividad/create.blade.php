@extends ('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Insertar Nuevo PDF</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>

{!!Form::open(array('url'=>'admin/normatividad','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
{{Form::token()}}
	<div class="form-group">
		<input type="hidden" name="id" value="{{ Auth::user()->id }}">
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<label for="nombre">Nombre PDF</label>
		<input type="text" name="nombrePDF" requerid class="form-control">
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<label>Tipo Normatividad</label>
		<select name="id_tipo_norma" class="form-control">
			@foreach ($normas as $nor)
			<option value="{{$nor->id_tip_normat}}"> {{$nor->nombre_tipo}} </option>
			@endforeach
		</select>
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<label for="url">Subir PDF</label>
		<input type="file" name="url" class="form-control">
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<button class="btn btn-primary" type="submit">Subir</button>
		<button class="btn btn-danger" type="reset">Cancelar</button>
	</div>
{!!Form::Close()!!}
@endsection
