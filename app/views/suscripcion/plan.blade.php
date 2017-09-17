@extends('layouts.master')

@section('content')

<!-- Section - Como Funciona-->
<div class="cd-section" id="como-funciona" style="background-color: #ececec;">
	<div class="container">
		<div class="features-1">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3 class="title">Completa tu suscripción</h3>
				</div>
			</div>
			<div class="row">
				<div class="mdl-card mdl-shadow--2dp">

					<div class="mdl-card__supporting-text">

						<div class="mdl-stepper-horizontal-alternative">
							<!-- step-done -->
							<div class="mdl-stepper-step active-step">
								<div class="mdl-stepper-circle"><span>1</span></div>
								<div class="mdl-stepper-title">Planes</div>
								<div class="mdl-stepper-bar-left"></div>
								<div class="mdl-stepper-bar-right"></div>
							</div>
							<div class="mdl-stepper-step">
								<div class="mdl-stepper-circle"><span>2</span></div>
								<div class="mdl-stepper-title">Datos Personales</div>
								<div class="mdl-stepper-bar-left"></div>
								<div class="mdl-stepper-bar-right"></div>
							</div>
							<!-- active-step -->
							<div class="mdl-stepper-step">
								<div class="mdl-stepper-circle"><span>3</span></div>
								<div class="mdl-stepper-title">Pago online</div>
								<div class="mdl-stepper-bar-left"></div>
								<div class="mdl-stepper-bar-right"></div>
							</div>
						</div>

					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<div class="card" style="padding: 0px 20px;">
						<h3 class="text-left">Elige un plan</h3>
						<h4 class="description" style="text-align: justify;">
							Hemos creado  dos programas de salud  de acuerdo a tus necesidades: el programa personal y el familiar (5 personas).  Si tienes un código de descuento, recuerda escribirlo para que se pueda aplicar.
						</h4>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="radio text-left">
									<label>
										<input value="1" type="radio" name="planCheck" class="planCheckUno" style="margin-top: 10px;">
										<span class="check" ></span>
										<h4 style="display: inline-block;margin-top: -4px;color: #2b94d2;font-weight: bold;">Personal</h4> <h5 style="margin-top: -4px;">Precio $29.90 anuales</h5>
									</label>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="radio text-left">
									<label>
										<input value="5" type="radio" name="planCheck" class="planCheckDos" style="margin-top: 10px;">
										<span class="check" ></span>
										<h4 style="display: inline-block;margin-top: -4px;color: #2b94d2;font-weight: bold;">Tú + 4 Beneficiarios</h4> <h5 style="margin-top: -4px;">Precio $59.90 anuales</h5>
									</label>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="form-group input-group-full label-floating is-empty text-left" id="codigo_contenedor">
									<label class="control-label">Código de descuento</label>
									<input class="form-control" id="codigo_vendedor" name="codigo_vendedor" type="text" value="">
									<span id="codigo_bien" class="form-control-feedback" style="display: none;"><i class="material-icons">done</i></span>
		 		                    <span id="codigo_mal" class="form-control-feedback" style="display: none;"><i class="material-icons">clear</i></span>
									<span class="material-input"></span>
									<p class="text-success" id="descuento_precio" style="font-weight: bold;display: none;">Descuento: $5.00</p>
								</div>
							</div>
							<div class="col-sm-8 col-xs-6">
								<div class="radio text-right">
									<span style="position: relative;"><img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;margin-right: 20px;margin-top: 8px;"></span>
									<a href="#" class="btn btn-primary btn-lg" id="paso-plan">Siguiente Paso</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fin Section - Como Funciona -->




@stop

@section('css')
<style type="text/css">
	.navbar-fixed-bottom,
	.navbar-fixed-top{
		position: absolute !important;
		top: 0;
		left: 0;
		width: 100%;
	}
	#sectionsNavEspera{
		display: block !important;
	}
	#sectionsNavEspera{
		box-shadow: inherit !important;
	}
	#sectionsNav{
		display: none !important;
	}
	.gif-register {
		position: relative !important;
		width: 40px !important;
		margin-bottom: 12px !important;
	}

	/* Simple setup for this demo */

	.mdl-card {
		width: 550px;
		min-height: 0;
		margin: 10px auto;
	}

	.mdl-card__supporting-text {
		width: 100%;
		padding: 0;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step {
		width: 33.33%;
		/* 100 / no_of_steps */
	}


	/* Begin actual mdl-stepper css styles */

	.mdl-stepper-horizontal-alternative {
		display: table;
		width: 100%;
		margin: 0 auto;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step {
		display: table-cell;
		position: relative;
		padding: 24px;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step:hover .mdl-stepper-circle {
		background-color: #757575;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step:first-child .mdl-stepper-bar-left,
	.mdl-stepper-horizontal-alternative .mdl-stepper-step:last-child .mdl-stepper-bar-right {
		display: none;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-circle {
		width: 24px;
		height: 24px;
		margin: 0 auto;
		background-color: #9E9E9E;
		border-radius: 50%;
		text-align: center;
		line-height: 2em;
		font-size: 12px;
		color: white;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.active-step .mdl-stepper-circle {
		background-color: rgb(33, 150, 243);
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.step-done .mdl-stepper-circle:before {
		content: "\2714";
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.step-done .mdl-stepper-circle *,
	.mdl-stepper-horizontal-alternative .mdl-stepper-step.editable-step .mdl-stepper-circle * {
		display: none;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.editable-step .mdl-stepper-circle {
		-moz-transform: scaleX(-1);
		/* Gecko */
		-o-transform: scaleX(-1);
		/* Opera */
		-webkit-transform: scaleX(-1);
		/* Webkit */
		transform: scaleX(-1);
		/* Standard */
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.editable-step .mdl-stepper-circle:before {
		content: "\270E";
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-title {
		margin-top: 16px;
		font-size: 16px;
		font-weight: normal;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-title,
	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-optional {
		text-align: center;
		color: rgba(0, 0, 0, .26);
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.active-step .mdl-stepper-title {
		font-weight: 500;
		color: rgba(0, 0, 0, .87);
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.active-step.step-done .mdl-stepper-title,
	.mdl-stepper-horizontal-alternative .mdl-stepper-step.active-step.editable-step .mdl-stepper-title {
		font-weight: 300;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-optional {
		font-size: 12px;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step.active-step .mdl-stepper-optional {
		color: rgba(0, 0, 0, .54);
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-bar-left,
	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-bar-right {
		position: absolute;
		top: 36px;
		height: 1px;
		border-top: 1px solid #BDBDBD;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-bar-right {
		right: 0;
		left: 50%;
		margin-left: 20px;
	}

	.mdl-stepper-horizontal-alternative .mdl-stepper-step .mdl-stepper-bar-left {
		left: 0;
		right: 50%;
		margin-right: 20px;
	}
</style>
@stop


@section('js')
<script type="text/javascript">
	$(document).ready(function(e){

		$('#paso-plan').click(function(e){
			e.preventDefault();
			if ( $('.planCheckUno').is(':checked') == false && $('.planCheckDos').is(':checked') == false ) {
				swal("¡Selecciona tu plan!");
				return false;
			}


			plan_url = "{{route('suscripcion.plan.post')}}";

			$('.gif-register').show();

			if ( $('.planCheckUno').is(':checked') == false ) {
				plan_valor = $('.planCheckDos').val();
			} else if ( $('.planCheckDos').is(':checked') == false ) {
				plan_valor = $('.planCheckUno').val();
			} else {
				swal("¡Selecciona tu plan!");
			}


			post_data =
			{
				plan: plan_valor,
				codigo_vendedor: $('#codigo_vendedor').val()
			}


			$.ajax({
				type : 'post',
				headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
				data: post_data,
				url  : plan_url,
				success: function(responseText){

                    if (responseText == 'error') {
                    	swal('Plan no elegido', 'Ha sucedido un error', "error");
                    	$('.gif-register').hide();
                    }
                    if (responseText == 'estado-cuenta') {
                    	swal('Plan no elegido', 'Ha sucedido un error', "error");
                    	$('.gif-register').hide();
                    	window.location.href = "{{route('cuenta.panel')}}";
                    	return false;
                    }
                    if (responseText == 'exito') {
                    	swal('Todo salió OK', 'Ahora completa tus datos', "success");
                    	$('.gif-register').hide();
                    }
                    setTimeout(function(){
                    	window.location.href = "{{route('suscripcion.datos')}}";
                    	return false;
                    }, 1000);
                }
            });

		});

	$(document).on("keyup", "#codigo_vendedor", function() {
        codigo_vendedor = $(this).val();

        $('#codigo_contenedor').removeClass('has-error');
        $('#codigo_contenedor').removeClass('has-success');
        $('#codigo_mal').hide();
        $('#codigo_bien').hide();
        $('#descuento_precio').hide();


        	post_data =
			{
				codigo_vendedor: codigo_vendedor
			}

			plan_url = "{{route('suscripcion.plan.codigo')}}";

		 // <span id="codigo_bien" class="form-control-feedback"><i class="material-icons">done</i></span>
		 // <span id="codigo_mal" class="form-control-feedback"><i class="material-icons">clear</i></span>

			$.ajax({
				type : 'post',
				headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
				data: post_data,
				url  : plan_url,
				success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                    	$('#codigo_bien').hide();
                    	$('#codigo_mal').show();
                    	$('#codigo_contenedor').addClass('has-error');
                    }
                    if (responseText == 'estado-cuenta') {
                    	swal('Plan no elegido', 'Ha sucedido un error', "error");
                    	window.location.href = "{{route('cuenta.panel')}}";
                    	return false;
                    }
                    if (responseText == 'exito') {
                    	$('#codigo_contenedor').addClass('has-success');
                    	$('#codigo_mal').hide();
                    	$('#codigo_bien').show();
                    	$('#descuento_precio').show();
                    	return false;
                    }
                }
            });
    });

	});
</script>
@stop