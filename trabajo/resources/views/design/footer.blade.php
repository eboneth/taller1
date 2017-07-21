<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
		<h4>Contacto</h4>
		<address>
			<strong>Direccion de Talento Humano</strong><br>
			Nit.: 891 780 111-8<br>
			Carrera 32 No. 22 - 08<br>
			Universidad del Magdalena | Sede Principal<br>
			Bloque Administrativo<br>
			PBX: (+57 - 5)4301292<br>
			Ext. 3211 | 2139 | 3419<br>
			Santa Marta D.T.C.H - Magdalena, Col
		</address>
	</div>
	<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
		<img src="img/sello.png" alt="Sello 55 años" class="img-responsive img-footer">
	</div>
	<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
		<h4>Enlaces de Interes</h4>
		<ul>
			<li><a href="http://www.unimagdalena.edu.co/Paginas/Inicio.aspx">Universidad del Magdalena</a></li>
			<li><a href="https://www.cajamag.com.co/">Cajamag</a></li>
			<li><a href="https://www.positiva.gov.co/Paginas/Home.aspx">Positiva</a></li>
		</ul>
	</div>
	<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
		<h4>Formulario de Contacto</h4>
		<div class="form-group">
			<input type="text" name="nombre" placeholder="Nombre Completo" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="Correo Electronico" class="form-control">
		</div>
		<div class="form-group">
			<select name="enviar" class="form-control">
				<option>Escoja una opcion</option>
				<option>Correo 1</option>
				<option>Correo 2</option>
				<option>Correo 3</option>
			</select>
		</div>
		<div class="form-group">
			<textarea name="mensaje" id="" cols="30" rows="5" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Enviar</button>
			<button type="reset" class="btn btn-danger">Cancelar</button>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-lg 12 col-md 12 col-sm 12 col-xs 12">
			<a href="{{ route('login') }}">Iniciar Sesion</a>
		</div>
	</div>
</div>