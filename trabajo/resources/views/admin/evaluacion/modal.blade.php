<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$ev->idempleados}}">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">x</span>
				</button>
				<h4 class="modal-title">Respuestas {{$ev->nombres}}</h4>
			</div>
		    <div class="modal-body">
			    <ul>
			        <li>Respuesta 1:     <b>{{$ev->pUno}}</b></li>
			        <li>Respuesta 2:     <b>{{$ev->pDos}}</b></li>
			        <li>Respuesta 3:     <b>{{$ev->pTres}}</b></li>
			        <li>Respuesta 4:     <b>{{$ev->pCuatro}}</b></li>
			        <li>Respuesta 5:     <b>{{$ev->pCinco}}</b></li>
			        <li>Respuesta 6:     <b>{{$ev->pSeis}}</b></li>
			        <li>Respuesta 7:     <b>{{$ev->pSiete}}</b></li>
			        <li>Respuesta 8:     <b>{{$ev->pOcho}}</b></li>
			        <li>Respuesta 9:     <b>{{$ev->pNueve}}</b></li>
			        <li>Respuesta 10:    <b>{{$ev->pDiez}}</b></li>
			        <li>Respuesta 11:    <b>{{$ev->pOnce}}</b></li>
			        <li>Respuesta 12:    <b>{{$ev->pDoce}}</b></li>
			        <li>Respuesta 13:    <b>{{$ev->pTrece}}</b></li>
			        <li>Respuesta 14:    <b>{{$ev->pCatorce}}</b></li>
			    </ul>
		    </div>
		    {!!Form::open(['url' => ['calificacion', $ev->id],'method' => 'put'])!!}
		    
		    
			{{Form::token()}}
			
			<div class="form-group">
				<label for="calificacion" class="form-control">Ingresa la calificacion a esta prueba</label>
				<input type="text" name="calificacion"/>
				<button type="submit">Calificar</button>
			</div>
		    {{form::Close()}}
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>