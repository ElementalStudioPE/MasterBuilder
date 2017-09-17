
<nav class="navbar navbar-primary navbar-fixed-top" id="sectionsNav">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{route('principal.inicio')}}">
				<!-- <img src="{{asset('static/img/logo.png')}}"> -->
				<img src="https://assistsalud.com/static/img/logo.png">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navigation-example">
			<ul class="nav navbar-nav navbar-right">
				<li class="white-background headerNavigationItems">
					<a href="#como-funciona">
						How It Works
					</a>
				</li>
				@if( Auth::check() )
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn-simple-link menu-xs-normal" data-toggle="dropdown" aria-expanded="false">
						<i class="material-icons">account_circle</i> {{Auth::user()->usuario_nombres}}
						<b class="caret"></b>
						<div class="ripple-container"></div>
					</a>
					<ul class="dropdown-menu dropdown-with-icons">
						<li style="min-width: 260px;">
							<a href="{{route('cuenta.panel')}}">Mi cuenta</a>
						</li>
						<li style="min-width: 260px;">
							<a href="#">Ayuda</a>
						</li>
						<li style="min-width: 260px;">
							<a href="{{route('session.salir')}}">Salir</a>
						</li>
					</ul>
				</li>
				@else				
				<li class="ingresar dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn-simple-link menu-xs-normal" data-toggle="dropdown" aria-expanded="false">
						<i class="material-icons">lock</i> Ingresar
						<b class="caret"></b>
						<div class="ripple-container"></div>
					</a>
					<ul class="dropdown-menu dropdown-with-icons">
						<!-- <h4 class="text-center info-title">Accede a tu cuenta</h4> -->
						<li style="min-width: 260px;">
							<form class="form-sign-in">
								<br>
								<div class="text-center">
									<a href="{{ route('session.ingresar.go') }}" class="btn btn-social btn-fill btn-google">
										<i class="fa fa-google"></i> Ingresa con Google
										<div class="ripple-container"></div>
									</a>
								</div>
								<br>
								<div class="line-sign-hr">
									<p class="description text-center" >O con tu correo electrónico</p>
								</div>
								<div class="content-sign-in">
									@if(Session::has('errorMsg'))
									<div class="col-xs-12">
										{{ Session::get('errorMsg') }}
									</div>
									@endif
									<div class="col-xs-12">
										<div class="form-group input-group-full label-floating" style="padding-bottom: 0 !important;">
											<label class="control-label">Correo electrónico</label>
											<input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required="true" id="login-email">
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group input-group-full label-floating" style="position: relative;">
											<label class="control-label">Contraseña</label>
											<input type="password" class="form-control showpassword-nav" required="true" name="password" value="{{ Input::old('password') }}" id="login-password">
											<button class="show-pass-nav">MOSTRAR</button>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="input-group text-right" style="width: 100%;margin-bottom: 10px;">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#olvideClave" class="pass">¿Olvidaste tu contraseña?</a>
										</div>
									</div>
								</div>
								<div class="footer text-center" style="padding: 0px 30px 10px 20px;">
									<button type="submit" class="btn btn-primary btn-wd" style="width: 100%;" id="initLogin">Ingresa a tu cuenta</button>
								</div>
							</form>
						</li>
					</ul>
				</li>
				<li class="ingresar-mobile btn-simple-link">
					<a href="javascript:void(0);" data-toggle="modal" data-target="#myModalLogin">
						<i class="material-icons">lock</i> Ingresar
					</a>
				</li>
				<li class="white-background">
					<a href="javascript:void(0);" class="btn btn-primary menu-xs-normal" data-toggle="modal" data-target="#myModal">
						Registrarse
					</a>
				</li>
				@endif
			</ul>
		</div>
	</div>
</nav>

@if(Auth::check())

<nav class="navbar navbar-fixed-top" id="sectionsNavEspera">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{route('principal.inicio')}}">
				<!-- <img src="{{asset('static/img/logo.png')}}"> -->
				<img src="https://assistsalud.com/static/img/logo.png">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navigation-example">
			<ul class="nav navbar-nav navbar-right">				
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn-simple-link menu-xs-normal" data-toggle="dropdown" aria-expanded="false">
						<i class="material-icons">account_circle</i> {{Auth::user()->usuario_nombres}}
						<b class="caret"></b>
						<div class="ripple-container"></div>
					</a>
					<ul class="dropdown-menu dropdown-with-icons">
						<li style="min-width: 260px;">
							<a href="{{route('cuenta.panel')}}">Mi cuenta</a>
						</li>
						<li style="min-width: 260px;">
							<a href="#">Ayuda</a>
						</li>
						<li style="min-width: 260px;">
							<a href="{{route('session.salir')}}">Salir</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

@endif


<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">Ingresa a ASSIST SALUD</h3>
			</div>
			<div class="modal-body">
				<form class="form-sign-in">
					<br>
					<div class="text-center">
						<a href="{{ route('session.ingresar.go') }}" class="btn btn-social btn-fill btn-google">
							<i class="fa fa-google"></i> Ingresa con Google
							<div class="ripple-container"></div>
						</a>
					</div>
					<br>
					<div class="line-sign-hr">
						<p class="description text-center" >O con tu correo electrónico</p>
					</div>
					<div class="content-sign-in">
						@if(Session::has('errorMsg'))
						<div class="col-xs-12">
							{{ Session::get('errorMsg') }}
						</div>
						@endif
						<div class="col-xs-12">
							<div class="form-group input-group-full label-floating" style="padding-bottom: 0 !important;">
								<label class="control-label">Correo electrónico</label>
								<input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required="true" id="modal-login-email">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group input-group-full label-floating" style="position: relative;">
								<label class="control-label">Contraseña</label>
								<input type="password" class="form-control modal-showpassword-nav" required="true" name="password" value="{{ Input::old('password') }}" id="modal-login-password">
								<button class="modal-show-pass-nav">MOSTRAR</button>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="input-group text-right" style="width: 100%;margin-bottom: 10px;">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#olvideClave" class="pass">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
					</div>
					<div class="footer text-center" style="padding: 0px 30px 10px 20px;">
					<button type="submit" class="btn btn-primary btn-wd" style="width: 100%;" id="modal-initLogin">Ingresa a tu cuenta</button>
					</div>
					<div class="" style="position: relative;">
						<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-login-modal" style="width: 35px;position: absolute;right: -12px;top: -47px;display: none;">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">Únete a ASSIST SALUD</h3>
			</div>
			<div class="modal-body">
				<form class="form">
				    <br>
					<div class="text-center">
						<a href="{{ route('session.ingresar.go') }}" class="btn btn-social btn-fill btn-google">
							<i class="fa fa-google"></i> Ingresa con Google
							<div class="ripple-container"></div>
						</a>
					</div>
					<br>
					<div class="line-sign-hr">
						<p class="description text-center" >O con tu correo electrónico</p>
					</div>
					<div class="content-sign-up row" style="margin: 0 !important;">

						@if(Session::has('errorMsg'))
						<div class="col-xs-12">
							{{ Session::get('errorMsg') }}
						</div>
						@endif
						<div class="col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Nombres</label>
								{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-nombres')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Apellido Paterno</label>
								{{ Form::text('primary_last_name', Input::old('primary_last_name'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-ap_paterno')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Apellido Materno</label>
								{{ Form::text('second_last_name', Input::old('second_last_name'), array('class' => 'form-control', 'placeholder' => '', 'id' => 'register-ap_materno')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Correo electrónico</label>
								{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-email')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating" style="position: relative;">
								<label class="control-label">Contraseña</label>
								<input type="password" class="form-control showpassword-register" required="true" name="password" value="{{ Input::old('password') }}" id="register-password">
								<button class="show-pass-register">MOSTRAR</button>
							</div>
						</div>
						<div class="col-xs-12">
							<br>
						</div>
					</div>
					<div class="footer text-center" style="padding: 0px 30px 10px 30px;position: relative;">
						<input type="submit" class="btn btn-primary btn-wd" style="width: 100%;" value="Crear cuenta" id="initRegister">
						<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="olvideClave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">¿Olvidaste tu contraseña?</h3>
			</div>
			<div class="modal-body">
				<form class="form">
				    <br>
					<div class="line-sign-hr">
						<p class="description text-center" >Ingresa tu correo electrónico</p>
					</div>
					<div class="content-sign-up row" style="margin: 0 !important;">

						@if(Session::has('errorMsg'))
						<div class="col-xs-12">
							{{ Session::get('errorMsg') }}
						</div>
						@endif
						<div class="col-sm-12 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Correo electrónico</label>
								{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'email-olvide-pass')) }}
							</div>
						</div>
						<div class="col-xs-12">
							<br>
						</div>
					</div>
					<div class="footer text-center" style="padding: 0px 30px 10px 30px;position: relative;">
						<input type="submit" class="btn btn-primary btn-wd" style="width: 100%;" value="Recuperar contraseña" id="olvideClaveButton">
						<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-olvide-pass" style="width: 35px;position: absolute;right: -12px;top: 4px;display: none;">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>