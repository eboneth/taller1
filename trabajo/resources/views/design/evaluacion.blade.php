{!!Form::open(array('url'=>'/evaluacion','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<!--<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	<div class="form-group">
		<label for="email">Correo Institucional</label>
		<div class="input-group">
			<input type="text" class="form-control" name="searchtext" placeholder="Ingrese su correo institucional" value="">
			<div class="input-group-addon">
				<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
			</div>
		</div>
	</div>-->
	<div class="form-group">
		<h4>1. PREGUNTAS MODULO INSTITUCIONAL</h4>
		<p>1.1 Identifique Marcando con X, los que identifique como valores Institucionales Unimagdalena</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pUno','a')}} a) Responsabilidad</li>
				<li>{{Form::radio('pUno','b')}} b) Honestidad</li>
				<li>{{Form::radio('pUno','c')}} c) Solidaridad</li>
				<li>{{Form::radio('pUno','d')}} d) Todas las anteriores</li>
				<li>{{Form::radio('pUno','e')}} e) Ninguna de las anteriores</li>
			</ul>
		</div>
		<p>1.2 Mencione una frase del Coro del Himno de La Universidad del Magdalena</p>
		<div class="form-group">
			<textarea name="pDos" id="dos" class="form-control" cols="30" rows="5"></textarea>
		</div>
	</div>
	<div class="form-group">
		<h4>2. PREGUNTAS MODULO TALENTO HUMANO</h4>
		<p>2.1 Marque con X los casos en que se pueden utilizar las Cesantias parciales</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pTres','a')}} a) Adquisicion de vivienda</li>
				<li>{{Form::radio('pTres','b')}} b) Reparaciones locativas o construccion en lote propio</li>
				<li>{{Form::radio('pTres','c')}}> c) Amortiguacion cuotas de vivienda o pago de hipoteca</li>
				<li>{{Form::radio('pTres','d')}} d) Educacion Superior</li>
				<li>{{Form::radio('pTres','e')}} e) Todas las anteriores</li>
			</ul>
		</div>
		<p>2.2 Mencione dos situaciones Administrativas</p>
		<div class="form-group">
			<textarea name="pCuatro" id="cuatro" class="form-control" cols="30" rows="5"></textarea>
		</div>
	</div>
	<div class="form-group">
		<h4>3. PREGUNTAS MODULO DIRECCIONAMIENTO ESTRATEGICO INSTITUCIONAL</h4>
		<p>3.1 Marque por cuales de los siguientes componentes esta conformado el plan de Gobierno Institucional 2016-2020</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pCinco','a')}} a) (4) Ejes misionales</li>
				<li>{{Form::radio('pCinco','b')}} b) (8) Politicas</li>
				<li>{{Form::radio('pCinco','c')}} c) (111) Iniciativas estrategicas</li>
				<li>{{Form::radio('pCinco','d')}} d) (61) Acciones priotitarias</li>
				<li>{{Form::radio('pCinco','e')}} e) Ninguno de los anteriores</li>
			</ul>
		</div>
		<p>3.2 Mencione los procesos misionales de la Universidad del Magdalena</p>
		<div class="form-group">
			<textarea name="pSeis" id="seis" class="form-control" cols="30" rows="5"></textarea>
		</div>
	</div>
	<div class="form-group">
		<h4>4. PREGUNTAS SISTEMA GESTION DE CALIDAD</h4>
		<p>4.1 Marque el Número de procesos certificados actualmente</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pSiete','a')}} a) 11</li>
				<li>{{Form::radio('pSiete','b')}} b) 18</li>
				<li>{{Form::radio('pSiete','c')}} c) 21</li>
			</ul>
		</div>
		<p>4.2 Marque con X, bajo qué normas está certificado el sistema de gestión de la calidad de la Universidad del Magdalena actualmente?</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pOcho','a')}} a) ISO 9001:2008; NTC GP 1000:2009</li>
				<li>{{Form::radio('pOcho','b')}} b) MECI: 2014; ISO 9001:2015</li>
				<li>{{Form::radio('pOcho','c')}} c) NTC 5801:2012;   Decreto 1712:2015; NTC 5906:2012</li>
			</ul>
		</div>
	</div>
	<div class="form-group">
		<h4>5. MODULO REGIMEN DISCIPLINARIO Y ACOSO LABORAL</h4>
		<p>5.1 Indique cuál de las siguientes opciones constituyen inicio de la Acción disciplinaria.</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pNueve','a')}} a) Queja</li>
				<li>{{Form::radio('pNueve','b')}} b) Informe de servidor publico</li>
				<li>{{Form::radio('pNueve','c')}} c) De Oficio</li>
				<li>{{Form::radio('pNueve','d')}} d) Todas las anteriores</li>
			</ul>
		</div>
		<p>5.2 Seleccione cuál de las siguientes opciones pueden ser sujetos disciplinables:</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pDiez','a')}} a) Servidor Publico Activo</li>
				<li>{{Form::radio('pDiez','b')}} b) Servidor publico retirado</li>
				<li>{{Form::radio('pDiez','c')}} c)  Particulares con funciones de supervisión y que administren recursos públicos</li>
				<li>{{Form::radio('pDiez','d')}} d) Todas las anteriores</li>
			</ul>
		</div>
	</div>
	<div class="form-group">
		<h4>6. MODULO DE GESTION DOCUMENTAL</h4>
		<p>6.1 Los documentos de los expedientes deben legajarse en que tamaño:</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pOnce','a')}} a) Tamaño Carta</li>
				<li>{{Form::radio('pOnce','b')}} b) Tamaño Oficio</li>
				<li>{{Form::radio('pOnce','c')}} c) Tamaño A4</li>
				<li>{{Form::radio('pOnce','d')}} d) Todas las anteriores</li>
			</ul>
		</div>
		<p>6.2 Organizar los expedientes en la medida en que se van produciendo los documentos corresponde a:</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pDoce','a')}} a) del mas reciente al mas antiguo</li>
				<li>{{Form::radio('pDoce','b')}} b) del mas antiguo al mas reciente</li>
				<li>{{Form::radio('pDoce','c')}} c) En orden alfabetico</li>
				<li>{{Form::radio('pDoce','d')}} d) En orden numerico</li>
			</ul>
		</div>
	</div>
	<div class="form-group">
		<h4>7. MODULO SISTEMA DE INFORMACION SIARE</h4>
		<p>7.1 Marque con X cual de los siguientes servicios ofrece el SIARE  Sistema de Informacion, Administracion de Recursos Educativos.</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pTrece','a')}} a) Reserva de Equipos Audio Visuales</li>
				<li>{{Form::radio('pTrece','b')}} b) Reserva de espacios fisicos (Clases no regulares)</li>
				<li>{{Form::radio('pTrece','c')}} c)  Solicitud de Tiquetes (Direccion Administrativa)</li>
				<li>{{Form::radio('pTrece','d')}} d) Gestion practicas de laboratorio</li>
				<li>{{Form::radio('pTrece','e')}} e) Todas las anteriores</li>
				<li>{{Form::radio('pTrece','f')}} e) Ninguno de los anteriores</li>
			</ul>
		</div>
	</div>
	<div class="form-group">
		<h4>8. MODULO BIENESTAR UNIVERSITARIO</h4>
		<p>8.1 Marque con X las áreas con las que esta Organizado bienestar Universitario</p>
		<div class="checkbox">
			<ul>
				<li>{{Form::radio('pCatorce','a')}} a) Area de deportes</li>
				<li>{{Form::radio('pCatorce','b')}} b) Area de cultura</li>
				<li>{{Form::radio('pCatorce','c')}} c) Area de desarrollo humano</li>
				<li>{{Form::radio('pCatorce','d')}} d) Area de salud</li>
				<li>{{Form::radio('pCatorce','e')}} e) Todas las anteriores</li>
			</ul>
		</div>
		<div>
			<input type="text" name="fk_idpersona" value="{{$fk_idpersona}}" hidden/>
		</div>
		<input type="submit" class="btn btn-primary">
	</div>
</div>
{{Form::Close()}}