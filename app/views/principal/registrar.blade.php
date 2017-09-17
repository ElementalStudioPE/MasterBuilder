@extends('layouts.master')

@section('content')
<div class="container" style="padding-top: 50px !important;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
			
			<br>
			<h4 style="color: #444;font-weight: bold;">Crear una cuenta</h4>
		</div>
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
			<div class="card card-signup">
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
								{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-nombres-page')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Apellido Paterno</label>
								{{ Form::text('primary_last_name', Input::old('primary_last_name'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-ap_paterno-page')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Apellido Materno</label>
								{{ Form::text('second_last_name', Input::old('second_last_name'), array('class' => 'form-control', 'placeholder' => '', 'id' => 'register-ap_materno-page')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Correo electrónico</label>
								{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => '', 'required' => 'true', 'id' => 'register-email-page')) }}
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating" style="position: relative;">
								<label class="control-label">Contraseña</label>
								<input type="password" class="form-control showpassword" required="true" name="password" value="{{ Input::old('password') }}" id="register-password-page">
								<button class="show-pass">MOSTRAR</button>
							</div>
						</div>
						<div class="col-xs-12">
							<br>
						</div>
					</div>
					<div class="footer text-center" style="padding: 0px 30px 10px 30px;position: relative;">
						<input type="submit" class="btn btn-primary btn-wd" style="width: 100%;" value="Crear cuenta" id="initRegisterPage">
						<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register-page" style="width: 25px;right: 3px;top: 19px;position: absolute;display: none;">
					</div>
				</form>
			</div>
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
	.input-group-full{
		width: 100% !important;
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
        $('#initRegisterPage').click(function(e){
            e.preventDefault();
            if ( $('#register-nombres-page').val() == '' ) {
                swal("¡El nombre es obligatorio!");
                return false;
            }
            if ( $('#register-ap_paterno-page').val() == '' ) {
                swal("¡El apellido paterno es obligatorio!");
                return false;
            }
            if ( $('#register-email-page').val() == '' ) {
                swal("¡El correo electrónico es obligatorio!");
                return false;
            }
            if ( $('#register-password-page').val() == '' ) {
                swal("¡La contraseña es obligatoria!");
                return false;
            }

            login_url = "{{route('session.register')}}";

            $('.gif-register-page').show();

            $.ajax({
                type : 'post',
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#register-email-page').val(), password: $('#register-password-page').val(), nombres: $('#register-nombres-page').val(), ap_paterno: $('#register-ap_paterno-page').val(), ap_materno: $('#register-ap_materno-page').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-nombres') {
                        swal('Error de ingreso', 'El nombre es obligatorio', "error");
                    }
                    if (responseText == 'error-ap_paterno') {
                        swal('Error de ingreso', 'El apellido paterno es obligatorio', "error");
                    }
                    if (responseText == 'error-email-existe') {
                        swal('Error de ingreso', 'Ya existe un usuario con el mismo correo', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'El correo es obligatorio', "error");
                    }
                    if (responseText == 'error-password') {
                        swal('Error de ingreso', 'La contraseña es obligatoria', "error");
                    }
                    if (responseText == 'exito') {
                        window.location.href = "{{route('session.login.flg')}}";
                    }
                    $('.gif-register-page').hide();
                }
            });
            return false;
        })
    });
</script>
@stop