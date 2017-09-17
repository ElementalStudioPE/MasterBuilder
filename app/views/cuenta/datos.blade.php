@extends('cuenta.layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card" style="padding: 0px 20px;">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Datos personales</h4>
						<p class="category" style="color: #fff;font-size: 15px;">Completa tu información.</p>
					</div>
					<div class="card-content table-responsive">
						<form>
							<div class="row text-left" style="margin: 0 !important;">
								<div class="col-xs-12">
									<?php 
									$isEmpty = '';
									$usuario_nombres = '';
									if (Auth::user()->usuario_nombres != '') {
										$usuario_nombres = Auth::user()->usuario_nombres;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Nombres</label>
										<input class="form-control" placeholder="" required="true" id="usuario_nombres" name="usuario_nombres" type="text" value="{{$usuario_nombres}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<?php 
									$isEmpty = '';
									$usuario_apepat = '';
									if (Auth::user()->usuario_apepat != '') {
										$usuario_apepat = Auth::user()->usuario_apepat;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Apellido Paterno</label>
										<input class="form-control" placeholder="" required="true" id="usuario_apepat" name="usuario_apepat" type="text" value="{{$usuario_apepat}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<?php 
									$isEmpty = '';
									$usuario_apemat = '';
									if (Auth::user()->usuario_apemat != '') {
										$usuario_apemat = Auth::user()->usuario_apemat;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Apellido Materno</label>
										<input class="form-control" placeholder="" id="usuario_apemat" name="usuario_apemat" type="text" value="{{$usuario_apemat}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating">
										<select class="form-control" name="c_tipo_documento" id="c_tipo_documento" required="true" readonly>
											@if(Auth::user()->c_tipo_documento == 1)
											<!-- <option value="">Tipo de documento</option> -->
											<option value="1" selected>DNI</option>
											<!-- <option value="2">Carnet Extranjería</option> -->
											@elseif( Auth::user()->c_tipo_documento == 2 )
											<!-- <option value="">Tipo de documento</option>
											<option value="1">DNI</option> -->
											<option value="2" selected>Carnet Extranjería</option>
											@else
											<option value="" selected>Tipo de documento</option>
											<option value="1">DNI</option>
											<option value="2">Carnet Extranjería</option>
											@endif
										</select>
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12">
									<?php 
									$isEmpty = '';
									$c_numero_documento = '';
									if (Auth::user()->c_numero_documento != '') {
										$c_numero_documento = Auth::user()->c_numero_documento;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Número de documento</label>
										<input class="form-control" placeholder="" id="c_numero_documento" name="c_numero_documento" type="text" value="{{$c_numero_documento}}" readonly>
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label>Fecha de Nacimiento</label>
									</div>
								</div>
								<?php 
								$isEmpty = '';
								$nacimiento = '';
								if ( Auth::user()->d_nacimiento != '') {
									$nacimiento = Auth::user()->d_nacimiento;
								} else {
									$isEmpty = 'is-empty';
								}
								?>
								<div class="col-xs-4">
									<div class="form-group input-group-full label-floating {{$isEmpty}}" style="margin-top: 0 !important;">
										<select class="form-control" name="" id="day">
											@if($nacimiento == '')
											<option value="" selected>Día</option>
											@for($i =1 ; $i <= 31 ; $i++ )
											<option value="{{$i}}">{{$i}}</option>'
											@endfor
											@else
											<?php $dia = substr($nacimiento, 8, 2); ?>
											@for($i =1 ; $i <= 31 ; $i++ )
											<?php $i = sprintf("%02d", $i); ?>
											@if( $dia == $i )
											<option value="{{$i}}" selected>{{$i}}</option>
											@else
											<option value="{{$i}}">{{$i}}</option>
											@endif
											@endfor
											@endif
										</select>
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group input-group-full label-floating {{$isEmpty}}" style="margin-top: 0 !important;">
										<select class="form-control" name="" id="month">

											@if( $nacimiento == '' )
											<option value="" selected>Mes</option>'
											<option value="1">Enero</option>'
											<option value="2">Febrero</option>'
											<option value="3">Marzo</option>'
											<option value="4">Abril</option>'
											<option value="5">Mayo</option>'
											<option value="6">Junio</option>'
											<option value="7">Julio</option>'
											<option value="8">Agosto</option>'
											<option value="9">Setiembre</option>'
											<option value="10">Octubre</option>'
											<option value="11">Noviembre</option>'
											<option value="12">Diciembre</option>'
											@else
											<?php $mes = substr($nacimiento, 5, 2); ?>

											@if($mes == 01)
											<option value="1" selected>Enero</option>
											@else
											<option value="1">Enero</option>
											@endif

											@if($mes == 02)
											<option value="2" selected>Febrero</option>
											@else
											<option value="2">Febrero</option>
											@endif

											@if($mes == 02)
											<option value="3" selected>Marzo</option>
											@else
											<option value="3">Marzo</option>
											@endif

											@if($mes == 04)
											<option value="4" selected>Abril</option>
											@else
											<option value="4">Abril</option>
											@endif

											@if($mes == 05)
											<option value="5" selected>Mayo</option>
											@else
											<option value="5">Mayo</option>
											@endif

											@if($mes == 06)
											<option value="6" selected>Junio</option>
											@else
											<option value="6">Junio</option>
											@endif

											@if($mes == 07)
											<option value="7" selected>Julio</option>
											@else
											<option value="7">Julio</option>
											@endif

											@if($mes == 08)
											<option value="8" selected>Agosto</option>
											@else
											<option value="8">Agosto</option>
											@endif

											@if($mes == 09)
											<option value="9" selected>Setiembre</option>
											@else
											<option value="9">Setiembre</option>
											@endif

											@if($mes == 10)
											<option value="10" selected>Octubre</option>
											@else
											<option value="10">Octubre</option>
											@endif

											@if($mes == 11)
											<option value="11" selected>Noviembre</option>
											@else
											<option value="11">Noviembre</option>
											@endif

											@if($mes == 12)
											<option value="12" selected>Diciembre</option>
											@else
											<option value="12">Diciembre</option>
											@endif

											@endif
										</select>
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group input-group-full label-floating {{$isEmpty}}" style="margin-top: 0 !important;">
										<select class="form-control" name="" id="year">
											@if( $nacimiento == '' )
											<option value="" selected>Año</option>
											@for( $i=date('o'); $i>=1910; $i-- )
											<option value="{{$i}}">{{$i}}</option>
											@endfor
											@else
											<?php $anio = substr($nacimiento, 0, 4); ?>
											<option value="{{$anio}}">{{$anio}}</option>
											@for( $i=date('o'); $i>=1910; $i-- )
											@if( $anio == $i )
											<option value="{{$i}}" selected>{{$i}}</option>
											@else
											<option value="{{$i}}">{{$i}}</option>
											@endif
											<option value="{{$i}}">{{$i}}</option>
											@endfor
											@endif
										</select>
										<span class="material-input"></span>
									</div>
								</div>

								<!-- Sexo -->
								<div class="col-sm-12 col-xs-12">
									<div class="radio text-left" style="margin-bottom: 0 !important;">
										<label style="padding-left: 0;    color: #b0b0b0;">
											Sexo
										</label>
									</div>
								</div>

								@if( Auth::user()->c_sexo == 'M'  )
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="M" checked style="margin-top: 10px;"> Masculino
										</label>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="F" style="margin-top: 10px;"> Femenino
										</label>
									</div>
								</div>
								@elseif( Auth::user()->c_sexo == 'F' )
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="M" style="margin-top: 10px;"> Masculino
										</label>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="F" checked style="margin-top: 10px;"> Femenino
										</label>
									</div>
								</div>
								@else
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="M" style="margin-top: 10px;"> Masculino
										</label>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="radio text-left">
										<label>
											<input type="radio" name="c_sexo" class="c_sexo" value="F" style="margin-top: 10px;"> Femenino
										</label>
									</div>
								</div>
								@endif
								<!-- Fin - Sexo -->
								<?php 
								$c_telefono_fijo = '';
								if ( Auth::user()->c_telefono_fijo != '') {
									$c_telefono_fijo = Auth::user()->c_telefono_fijo;
								}
								?>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating">
										<label class="control-label">Teléfono fijo</label>
										<input class="form-control" placeholder="" required="true" id="c_telefono_fijo" name="c_telefono_fijo" type="text" value="{{$c_telefono_fijo}}">
										<span class="material-input"></span>
									</div>
								</div>
								<?php 
								$c_telefono_movil = '';
								if ( Auth::user()->c_telefono_movil != '') {
									$c_telefono_movil = Auth::user()->c_telefono_movil;
								}
								?>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating">
										<label class="control-label">Celular</label>
										<input class="form-control" placeholder="" required="true" id="c_telefono_movil" name="c_telefono_movil" type="text" value="{{$c_telefono_movil}}">
										<span class="material-input"></span>
									</div>
								</div>
								<!-- Lugar de residencia -->
								<!-- <div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating is-empty">
										<div class="form-item">
											<input id="country" type="text">
											<label for="country" style="display:none;">Select a country here...</label>
										</div>
										<div class="form-item" style="display:none;">
											<input type="text" id="country_code" name="country_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
											<label for="country_code">...and the selected country code will be updated here</label>
										</div>

									</div>
								</div> -->
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating is-empty">
									<label class="control-label">País</label>
									    @if( Auth::user()->pais_cod == '' )
										<div id="address-country" data-input-name="country" data-selected-country="PE"></div>
										@else
										<div id="address-country" data-input-name="country" data-selected-country="{{ Auth::user()->pais_cod }}"></div>
										@endif
										<span class="material-input"></span>
									</div>
								</div>
								<?php 
								$isEmpty = '';
								$ciudad_codigo = '';
								if ( Auth::user()->ciudad_codigo != '') {
									$ciudad_codigo = Auth::user()->ciudad_codigo;
								} else {
									$isEmpty = 'is-empty';
								}
								?>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Ciudad/Estado</label>
										<input class="form-control" placeholder="" required="true" id="ciudad_codigo" name="ciudad_codigo" type="text" value="{{$ciudad_codigo}}">
										<span class="material-input"></span>
									</div>
								</div>
								<?php 
								$isEmpty = '';
								$postal_codigo = '';
								if ( Auth::user()->postal_codigo != '') {
									$postal_codigo = Auth::user()->postal_codigo;
								} else {
									$isEmpty = 'is-empty';
								}
								?>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Código Postal</label>
										<input class="form-control" placeholder="" id="postal_codigo" name="postal_codigo" type="text" value="{{$postal_codigo}}">
										<span class="material-input"></span>
									</div>
								</div>
								<!-- Fin - Lugar de residencia -->

								<!-- Direccion -->
								<?php 
								$isEmpty = '';
								$c_direccion = '';
								if ( Auth::user()->c_direccion != '') {
									$c_direccion = Auth::user()->c_direccion;
								} else {
									$isEmpty = 'is-empty';
								}
								?>
								<div class="col-sm-6 col-xs-12">
									<div class="form-group input-group-full label-floating {{$isEmpty}}">
										<label class="control-label">Dirección de residencia</label>
										<input class="form-control" placeholder="" required="true" id="c_direccion" name="c_direccion" type="text" value="{{$c_direccion}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group input-group-full label-floating">
										<label class="control-label">Email</label>
										<input class="form-control" placeholder="" id="email" name="email" type="text" value="{{ Auth::user()->email }}" readonly>
										<span class="material-input"></span>
									</div>
								</div>
								<!-- Fin - Direccion -->

								<div class="col-xs-12">
									<div class="radio text-right">
										<a href="#" class="btn btn-primary btn-lg" id="paso-datos">Actualizar información</a>
									</div>
									<br>
								</div>
								<div class="col-xs-12" style="position: relative;">
									<img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;max-width: 100px;">
									<br>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
	@stop


	@section('css')
	<link href="{{asset('static/css/flags.css')}}" rel="stylesheet">
	<link href="{{asset('static/build/css/intlTelInput.css')}}" rel="stylesheet"/>
	<style type="text/css">
		#country{
			border: 0;
			border-bottom: 1px solid #d2d2d2;
			padding-bottom: 12px;
		}
		.country-select.inside .flag-dropdown{
			margin-top: -15px;
		}
		#address-country button{
			        background: #fff !important;
    color: #555555;
    box-shadow: inherit !important;
    margin: 0 !important;
		}
	</style>
	@stop

	@section('js')

	<script src="{{asset('static/js/jquery.flagstrap.js')}}"></script>
	<script src="{{asset('static/build/js/intlTelInput.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function(e){
			$('#paso-datos').click(function(e){
				e.preventDefault();

				if ( $('#usuario_nombres').val() == '' ) {
					swal("¡El nombre es obligatorio!");
					return false;
				}

				if ( $('#usuario_apepat').val() == '' ) {
					swal("¡El apellido paterno es obligatorio!");
					return false;
				}

				if ( $('#c_tipo_documento').val() == '' ) {
					swal("¡Elige un tipo de documento!");
					return false;
				}

				if ( $('#c_numero_documento').val() == '' ) {
					swal("¡El número de documento es obligatorio!");
					return false;
				}

				if ( $('#day').val() == '' ) {
					swal("¡El día es obligatorio!");
					return false;
				}

				if ( $('#month').val() == '' ) {
					swal("¡El mes es obligatorio!");
					return false;
				}

				if ( $('#year').val() == '' ) {
					swal("¡El año es obligatorio!");
					return false;
				}

				if ( !$("input[name='c_sexo']:checked").val() ) {
					swal("¡Elige un sexo!");
					return false;
				}

				if ( $('#c_telefono_fijo').val() == '' ) {
					swal("¡El teléfono fijo es obligatorio!");
					return false;
				}

				if ( $('#c_telefono_movil').val() == '' ) {
					swal("¡El teléfono móvil es obligatorio!");
					return false;
				}

				if ( $('#address-country select option:selected').val() == '' ) {
					swal("¡El país es obligatorio!");
					return false;
				}

				if ( $('#ciudad_codigo').val() == '' ) {
					swal("¡La ciudad es obligatoria!");
					return false;
				}

				if ( $('#postal_codigo').val() == '' ) {
					swal("¡El Código postal es obligatorio!");
					return false;
				}

				if ( $('#c_direccion').val() == '' ) {
					swal("¡La dirección es obligatoria!");
					return false;
				}

				suscripcion_url = "{{route('cuenta.datos.actualizar')}}";

				$('.gif-register').show();

				var dia = $('#day option:selected').val();
				var mes = $('#month option:selected').val();
				var anio = $('#year option:selected').val();
				var cumpleanios = anio + "-" + mes + "-" + dia;

				post_data =
				{
					usuario_nombres: $('#usuario_nombres').val(),
					usuario_apepat: $('#usuario_apepat').val(),
					usuario_apemat:$('#usuario_apemat').val(),
					c_tipo_documento: $('#c_tipo_documento').val(),
					c_numero_documento: $('#c_numero_documento').val(),
					d_nacimiento: cumpleanios,
					c_sexo: $('input[name=c_sexo]:checked').val(),
					c_telefono_fijo: $('#c_telefono_fijo').val(),
					c_telefono_movil: $('#c_telefono_movil').val(),
					pais_cod: $('#address-country select option:selected').val(),
					ciudad_codigo: $('#ciudad_codigo').val(),
					postal_codigo: $('#postal_codigo').val(),
					c_direccion: $('#c_direccion').val()
				}

				$.ajax({
					type : 'post',
					headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
					data: post_data,
					url  : suscripcion_url,
					success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                    	swal('Error de envío', 'Ha sucedido un error', "error");
                    	$('.gif-register').hide();
                    	return false;
                    }
                    if (responseText == 'exito') {
                    	swal('Todo salió OK', 'Datos actualizados', "success");
                    	$('.gif-register').hide();
                    }
                    setTimeout(function(){
                    	window.location.href = "{{route('cuenta.panel')}}";
                    	return false;
                    }, 2000);
                }
            });
				return false;
			});


			$('#address-country').flagStrap();

			$("#c_telefono_fijo").intlTelInput({
				initialCountry: "pe",
				utilsScript: "{{asset('static/build/js/utils.js')}}"
			});

			$("#c_telefono_movil").intlTelInput({
				initialCountry: "pe",
				utilsScript: "{{asset('static/build/js/utils.js')}}"
			});


		});
	</script>
	@stop