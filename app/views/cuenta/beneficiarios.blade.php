@extends('cuenta.layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Beneficiarios</h4>
						<p class="category" style="color: #fff;font-size: 15px;">Tu plan te permite tener <strong>4</strong> beneficiarios</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table">
							<thead class="text-primary">
								<tr>
									<th>Código</th>
									<th>Afiliado</th>
									<th>Tipo de documento</th>
									<th>N° de documento</th>
									<th>Fecha de nacimiento</th>
									<!-- <th>Acciones</th> -->
								</tr>
							</thead>
							<tbody>
								@foreach( Afiliado::whereUsuario_codigo(Auth::user()->usuario_codigo)->get() as $afiliado )
								<tr>
									<td>{{$afiliado->codigo_unico_afiliado}}</td>
									<td>{{$afiliado->afiliado_nombres}} {{$afiliado->afiliado_apepat}} {{$afiliado->afiliado_apemat}}</td>
									<?php ($afiliado->c_tipo_documento == 1) ? $tipo_documento = 'DNI' : $tipo_documento = 'Carnet Extranjería' ; ?>
									<td>{{$tipo_documento}}</td>
									<td>{{$afiliado->c_numero_documento}}</td>
									@if($afiliado->d_nacimiento != '0000-00-00 00:00:00')
									<td>{{ date('d/m/Y', strtotime($afiliado->d_nacimiento)) }}</td>
									@else
									<td>--/--/--</td>
									@endif
									<!-- <td class="td-actions text-right">
										<button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Editar" data-toggle="modal" data-target="#editarBeneficiario">
											<i class="material-icons">edit</i>
											<div class="ripple-container"></div>
										</button>
										<button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Eliminar" data-toggle="modal" data-target="#editarBeneficiario">
											<i class="material-icons">close</i>
										</button>
									</td> -->
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12 text-right">
				@if( Afiliado::whereUsuario_codigo( Auth::user()->usuario_codigo )->count() < Auth::user()->plan_suscripcion )
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-primary" data-toggle="modal" data-target="#agregarBeneficiario">Agregar beneficiario</a>
				@else
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-primary" data-toggle="modal" data-target="#agregarBeneficiario" >Agregar beneficiario</a>
				@endif
			</div>
		</div>


	</div>
</div>


@stop


@section('js')

@if( Afiliado::whereUsuario_codigo( Auth::user()->usuario_codigo )->count() < Auth::user()->plan_suscripcion )
<div class="modal fade" id="agregarBeneficiario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">Agregar beneficiario</h3>
			</div>
			<div class="modal-body">
				{{ Form::open( array( 'action' => 'CuentaController@beneficiarios_agregar', 'class' => '', 'id' => 'agregar-beneficiario' ) ) }}
				<div class="content-sign-up row" style="margin: 0 !important;">
					<div class="col-xs-12">
						<div class="form-group input-group-full label-floating is-empty">
							<label class="control-label">Nombres</label>
							<input class="form-control" placeholder="" required="true" name="afiliado_nombres" type="text">
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group input-group-full label-floating is-empty">
							<label class="control-label">Apellido Paterno</label>
							<input class="form-control" placeholder="" required="true" name="afiliado_apepat" type="text">
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group input-group-full label-floating is-empty">
							<label class="control-label">Apellido Materno</label>
							<input class="form-control" placeholder="" name="afiliado_apemat" type="text">
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group input-group-full label-floating">
							<select class="form-control" name="c_tipo_documento" required="true">
								<option value="" selected>Tipo de documento</option>
								<option value="1">DNI</option>
								<option value="2">Carnet Extranjería</option>
							</select>
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group input-group-full label-floating is-empty">
							<label class="control-label">Número de documento</label>
							<input class="form-control" placeholder="" name="c_numero_documento" type="text" required="true">
							<span class="material-input"></span>
						</div>
					</div>
					<!-- Sexo -->
					<div class="col-xs-3">
						<div class="radio text-left">
							<label style="padding-left: 0;">
								Sexo
							</label>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="radio text-left">
							<label>
								<input type="radio" name="c_sexo" class="c_sexo" value="M" style="margin-top: 10px;"> Masculino
							</label>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="radio text-left">
							<label>
								<input type="radio" name="c_sexo" class="c_sexo" value="F" style="margin-top: 10px;"> Femenino
							</label>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="radio text-left">
							<label>

							</label>
						</div>
					</div>
					<!-- Fin - Sexo -->
					<div class="col-xs-3">
						<div class="form-group input-group-full label-floating is-empty">
							<label>Fecha de Nacimiento</label>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group input-group-full label-floating is-empty">
							<select class="form-control" name="day" required="true">
								<option value="" selected>Día</option>
								@for($i =1 ; $i <= 31 ; $i++ )
								<option value="{{$i}}">{{$i}}</option>'
								@endfor
							</select>
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group input-group-full label-floating is-empty">
							<select class="form-control" name="month" required="true">
								<option value="" selected>Mes</option>
								<option value="1">Enero</option>
								<option value="2">Febrero</option>
								<option value="3">Marzo</option>
								<option value="4">Abril</option>
								<option value="5">Mayo</option>
								<option value="6">Junio</option>
								<option value="7">Julio</option>
								<option value="8">Agosto</option>
								<option value="9">Setiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
							<span class="material-input"></span>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group input-group-full label-floating is-empty">
							<select class="form-control" name="year" required="true">
								<option value="" selected>Año</option>
								@for( $i=date('o'); $i>=1910; $i-- )
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
							<span class="material-input"></span>
						</div>
					</div>
					
					<div class="col-xs-12">
						<br>
					</div>
				</div>
				<div class="footer text-center" style="padding: 0px 30px 10px 30px;position: relative;">
					<input type="submit" class="btn btn-primary btn-wd" style="width: 100%;" value="Crear beneficiario">
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(e){

		$(document).on("submit", "#agregar-beneficiario", function(e) {
			var self = this;
			e.preventDefault();
			if ( $('.c_sexo').is(':checked') == false ) {
				swal("¡Selecciona un sexo!");
				return false;
			}
			self.submit();
			return false;
		});

	});
</script>

@else
<div class="modal fade" id="agregarBeneficiario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">Plan de benficios</h3>
			</div>
			<div class="modal-body">
				<form class="form">
					<div class="content-sign-up row" style="margin: 0 !important;">
						<div class="col-xs-12">
							<h4 class="description">
								<strong>Tu plan</strong> no acepta más beneficiarios
							</h4>
							<h5><strong>¿Qué debe hacer?</strong>?</h5>
							<p>
								Actualiza tu plan y agrega más beneficiarios
							</p>
						</div>
						<div class="col-xs-12">
							<br>
						</div>
					</div>
					<div class="footer text-right" style="padding: 0px 30px 10px 30px;position: relative;">
                     <input type="submit" class="btn btn-primary btn-wd close" data-dismiss="modal" aria-hidden="true" style="width: 100%;max-width: 200px;" value="Cerrar">
                 </div>
                 <br>
                 <br>
             </form>
         </div>
		</div>
	</div>
</div>
@endif


@stop