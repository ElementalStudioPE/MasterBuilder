@extends('vendedor.layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="card card-signup">
				<form class="form" method="" action="#">
					<div class="header header-primary text-center">
						<h4 class="card-title">Obtén un código de descuento</h4>
					</div>
					<div class="content">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">face</i>
							</span>
							<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre..." required="true">
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">face</i>
							</span>
							<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido..." required="true">
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">email</i>
							</span>
							<input type="text" name="email" id="email" class="form-control" placeholder="Email..." required="true">
						</div>
					</div>
					<div class="footer text-center">
						<input type="submit" value="Crear Código" class="btn btn-primary btn-simple btn-wd btn-lg" id="registrarVendedor">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
<script type="text/javascript">
    $(document).ready(function(e){
        $('#registrarVendedor').click(function(e){
            e.preventDefault();
            if ( $('#nombre').val() == '' ) {
                swal("¡El nombre es obligatorio!");
                return false;
            }
            if ( $('#apellido').val() == '' ) {
                swal("¡El apellido es obligatorio!");
                return false;
            }
            if ( $('#email').val() == '' ) {
                swal("¡El correo electrónico es obligatorio!");
                return false;
            }

            login_url = "{{route('vendedor.generar')}}";

            $('.gif-register').show();

            $.ajax({
                type : 'post',
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#email').val(), nombre: $('#nombre').val(), apellido: $('#apellido').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-nombre') {
                        swal('Error de ingreso', 'El nombre es obligatorio', "error");
                    }
                    if (responseText == 'error-apellido') {
                        swal('Error de ingreso', 'El apellido es obligatorio', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'El correo es obligatorio', "error");
                    }
                    if (responseText == 'error-email-existe') {
                        swal('Error de ingreso', 'Ya existe un vendedor con el mismo correo', "error");
                    }
                    if (responseText == 'exito') {
                        swal('¡Registro exitoso!', 'Te hemos enviado un código de descuento a tu correo', "success");
                    }
                    $('.gif-register').hide();
                }
            });
            return false;
        })
    });
</script>
@stop