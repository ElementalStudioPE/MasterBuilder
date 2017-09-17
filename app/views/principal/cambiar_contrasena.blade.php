@extends('layouts.master')

@section('content')
<div class="container" style="padding-top: 50px !important;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
			<!-- <a class="" href="{{route('principal.inicio')}}">
				<img src="http://assistsalud.com/assets/img/logo.png" style="margin: 0 auto;">
			</a> -->
			<br><br>
			<h4 style="color: #444;font-weight: bold;">Hola {{$usuario->usuario_nombres}}</h4>
		</div>
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		    {{ Form::open( array('route' => 'session.olvide.contrasenapost', 'class' => 'form-horizontal') ) }}
			<div class="card card-signup">
				<br>
				<div class="line-sign-hr">
					<p class="description text-center" >Ingresa la nueva contraseña</p>
				</div>
				<div class="content">
					@if(Session::has('errorMsg'))
					<div class="col-xs-12">
						{{ Session::get('errorMsg') }}
					</div>
					@endif
					<input type="hidden" name="codigo_password" value="{{$usuario->codigo_password}}">
					<div class="col-xs-12">
						<div class="form-group input-group-full label-floating" style="position: relative;">
							<label class="control-label">Contraseña</label>
							<input type="password" class="form-control showpassword" required="true" name="password" value="{{ Input::old('password') }}" >
							<button class="show-pass">MOSTRAR</button>
						</div>
					</div>
				</div>
				<div class="footer text-center" style="padding: 0px 30px 0px 20px;">
					<button type="submit" class="btn btn-primary btn-wd" style="width: 100%;" id="CambiarClave">Cambiar contraseña</button>
				</div>
				<br>
			</div>
			<br>
			<div class="" style="position: relative;">
				<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="page-ingresar" style="width: 35px;position: absolute;right: -12px;top: -47px;display: none;">
			</div>
			<br>
			<br>
			{{ Form::close() }}

		</div>
	</div>
</div>
@stop

@section('css')
<style type="text/css">
	.show-pass{
		font-size: 12px;
		cursor: pointer;
		position: absolute;
		right: 4px;
		top: 10px;
		z-index: 999;
		font-weight: 400;
		color: #9e9e9e;
		background: inherit !important;
		border: 0 !important;
	}
</style>
@stop

@section('js')
<script type="text/javascript">
	$(function () {
		$(".showpassword").each(function (index, input) {
			var $input = $(input);
			$(".show-pass").click(function (e) {
				e.preventDefault();
				var change = "";
				if ($(this).html() === "MOSTRAR") {
					$(this).html("OCULTAR")
					change = "text";
				} else {
					$(this).html("MOSTRAR");
					change = "password";
				}
				var rep = $("<input type='" + change + "' />")
				.attr("id", $input.attr("id"))
				.attr("name", $input.attr("name"))
				.attr('class', $input.attr('class'))
				.val($input.val())
				.insertBefore($input);
				$input.remove();
				$input = rep;
			}).insertAfter($input);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(e){
		$('#ingresaLanding').click(function(e){
			e.preventDefault();
			if ( $('#loginEmail').val() == '' ) {
				swal("¡Falta el correo!");
				return false;
			}
			if ( $('#loginPassword').val() == '' ) {
				swal("¡Falta la contraseña!");
				return false;
			}

			login_url = "{{route('session.login')}}";

			$('.page-ingresar').show();

			$.ajax({
				type : 'post',
				headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
				data: {email: $('#loginEmail').val(), password: $('#loginPassword').val() },
				url  : login_url,
				success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                    	swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-email') {
                    	swal('Error de ingreso', 'No existe un usuario con ese correo', "error");
                    }
                    if (responseText == 'error-password') {
                    	swal('Error de ingreso', 'La contraseña es incorrecta', "error");
                    }
                    if (responseText == 'exito') {
                    	window.location.href = "{{route('session.login.flg')}}";
                    }
                }
            });
			return false;
		})
	});
</script>
@stop