<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Hola {{ Auth::user()->usuario_nombres }}</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">notifications</i>
						<span class="notification">5</span>
						<p class="hidden-lg hidden-md">Notificaciones</p>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Notificación #1</a></li>
						<li><a href="#">Notificación #2</a></li>
						<li><a href="#">Notificación #3</a></li>
						<li><a href="#">Notificación #4</a></li>
						<li><a href="#">Notificación #5</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">person</i>
						<p class="hidden-lg hidden-md">{{ Auth::user()->usuario_nombres }}</p>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{route('cuenta.panel')}}">Mi panel</a></li>
						<li><a href="{{route('cuenta.ayuda')}}">Ayuda</a></li>
						<li><a href="{{route('session.salir')}}">Salir</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>