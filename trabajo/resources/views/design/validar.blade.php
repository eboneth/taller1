{!!Form::open(array('url'=>'/evaluar','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	<div class="form-group">
		<label for="email">Correo Institucional</label>
		<div class="input-group">
			<input type="text" class="form-control" name="email" placeholder="Ingrese su correo institucional" value="">
			<div class="input-group-addon">
				<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
			</div>
		</div>
	</div>
	<p>* Para realizar esta evaluacion debe ingresar unicamente su correo institucional</p>
</div>
{{Form::close()}}