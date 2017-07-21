<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('evento')}}">Eventos</a></li>
        <li><a href="{{url('admin/noticias')}}">Noticias</a></li>
        <li><a href="{{url('admin/normatividad')}}">Normatividad</a></li>
        <li><a href="{{url('admin/evaluacion')}}">Evaluacion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<p class="navbar-text">Bienvenido {{ Auth::user()->name }}</p>
      	<li>
					<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					Cerrar Sesion
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
