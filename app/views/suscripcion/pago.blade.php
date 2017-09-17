@extends('layouts.master')

@section('content')

<?php $descuento = 5.00; ?>
<?php $precioPersonal = 29.90; ?>
<?php $precioFamiliar = 59.90; ?>
<?php $original = 0; ?>
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
							<div class="mdl-stepper-step active-step step-done">
								<div class="mdl-stepper-circle"><span>1</span></div>
								<div class="mdl-stepper-title">Planes</div>
								<div class="mdl-stepper-bar-left"></div>
								<div class="mdl-stepper-bar-right"></div>
							</div>
							<div class="mdl-stepper-step active-step step-done">
								<div class="mdl-stepper-circle"><span>2</span></div>
								<div class="mdl-stepper-title">Datos Personales</div>
								<div class="mdl-stepper-bar-left"></div>
								<div class="mdl-stepper-bar-right"></div>
							</div>
							<div class="mdl-stepper-step active-step">
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
						<h3 class="text-left" style="color: #2b94d2;">Datos del cliente</h3>
						<div class="row text-left">
							<div class="col-sm-12 col-xs-12">
								<p><strong>Nombre completo:</strong> {{ Auth::user()->usuario_nombre }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<p><strong>Teléfono:</strong> {{ Auth::user()->c_telefono_fijo }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<p><strong>Celular:</strong> {{ Auth::user()->c_telefono_movil }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<?php
								if (Auth::user()->c_tipo_documento == 1) {
									$documento = 'DNI';
								}
								if (Auth::user()->c_tipo_documento == 1) {
									$documento = 'Carnet Extranjería';
								}
								else {
									$documento = '---';
								}


								?>
								<p><strong>{{$documento}}:</strong> {{ Auth::user()->c_numero_documento }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<p><strong>Correo:</strong> {{ Auth::user()->email }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<p><strong>Dirección:</strong> {{ Auth::user()->c_direccion }}</p>
							</div>
							<div class="col-sm-6 col-xs-12">
								<p><strong>Código postal:</strong> {{ Auth::user()->postal_codigo }}</p>
							</div>
						</div>
						<hr>
						<h3 class="text-left" style="color: #2b94d2;">Resumen de compra</h3>
						<div class="text-left">
							<div class="col-sm-12 col-xs-12">
								@if( Auth::user()->plan_suscripcion == 0 )
									<h5 style="margin-top: 0;">$1000.00 por un año</h5>
									<h5>Error al elegir plan</h5>
								@elseif( Auth::user()->plan_suscripcion == 1 )
									<?php 
									$vendedor = Vendedor::whereCodigo_referencia( Auth::user()->codigo_referencia )->first();
									if ($vendedor) {
										$precio = $precioPersonal-$descuento;
										$original = $precioPersonal;
									}
									else{
										$precio = $precioPersonal;
									}
									$precio = number_format((float)$precio, 2, '.', '');
									?>
									@if($original != 0)
									<h5 style="margin-top: 0;"><span style="text-decoration: line-through;">$ {{$original}}</span>  $ {{$precio}} por un año</h5>
									@else
									<h5 style="margin-top: 0;">$ {{$precio}} por un año</h5>
									@endif
									<h5>Plan personal</h5>								
								@elseif( Auth::user()->plan_suscripcion == 5 )
									<?php 
									$vendedor = Vendedor::whereCodigo_referencia( Auth::user()->codigo_referencia )->first();
									if ($vendedor) {
										$precio = $precioFamiliar-$descuento;
										$original = $precioFamiliar;
									}
									else{
										$precio = $precioFamiliar;
									}
									$precio = number_format((float)$precio, 2, '.', '');
									?>
									@if($original != 0)
									<h5 style="margin-top: 0;"><span style="text-decoration: line-through;">$ {{$original}}</span>  $ {{$precio}} por un año</h5>
									@else
									<h5 style="margin-top: 0;">$ {{$precio}} por un año</h5>
									@endif
									<h5>Plan familiar</h5>
								@else
									<h5 style="margin-top: 0;">$1000.00 por un año</h5>
									<h5>Error al elegir plan</h5>
								@endif
							</div>
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="terminos" checked="true">
										<span class="checkbox-material"></span>
										Acepto los <a href="javascript:void(0);" data-toggle="modal" data-target="#terminos">Términos y condiciones</a> del servicio.
									</label>
								</div>
							</div>
						</div>
						<div class="col-xs-12 siguiente-paso">
							<div class="radio text-right">
								<span style="position: relative;"><img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;margin-right: 20px;margin-top: 8px;"></span>
								<a href="#" class="btn btn-primary btn-lg" id="paso-pago">Pagar</a>
							</div>
						</div>
						<div class="col-xs-12 ir-panel" style="display: none;">
							<div class="radio text-right">
								<a href="{{route('session.login.flg')}}" class="btn btn-success btn-lg">Ir al panel</a>
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


<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">Términos y condiciones</h3>
			</div>
			<div class="modal-body">
				<form class="form">
					<div class="content-terminos row" style="margin: 0 !important;overflow-y: auto;max-height: 500px;">
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">1. Datos de identificación</h5>
									<p class="info-left">
										Usted está visitando la Web http://assistsalud.com/ (la “Web”), titularidad de SAN VICENTE ASSIST SALUD S.A.C. (en adelante ASSIST SALUD). <br>
										Denominación: SAN VICENTE ASSIST SALUD S.A.C <br>
										Domicilio: Jirón Philipp Von Leonard N°102, Dpto. 101, San Borja, Lima, Perú. <br>
										R.U.C.: 20600631897 <br>
										Registro: Personas Jurídicas de Lima - Partida Electrónica 13450222 <br>
										E-mail: info@assistsalud.com <br>
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">2. Acceso y aceptación del Usuario</h5>
									<p class="info-left">
										Estos Términos y Condiciones regulan el acceso y utilización de los servicios que ofrece la Web por parte del Usuario. La condición de “Usuario” es adquirida por la mera navegación y/o utilización de la Web. <br> El acceso y utilización de la Web por parte del Usuario tiene carácter libre y gratuito, con excepción de algunos servicios suministrados por ASSIST SALUD o por terceros a través de la Web que están sujetos a condiciones específicas. <br>
										Asimismo, el acceso y navegación por parte del Usuario en la Web implica la aceptación sin reservas de todas las disposiciones incluidas en los presentes Términos y Condiciones.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">3. Declaraciones y Avisos</h5>
									<p class="info-left">
										El Usuario acepta que ASSIST SALUD puede proporcionarle información y notificaciones en cuanto al servicio mediante la publicación de dicha información y avisos en nuestro sitio web, enviando un correo electrónico a la dirección de correo electrónico que aparece en su cuenta ASSIST SALUD, o enviarlos por correo físico a la dirección que aparece en su cuenta ASSIST SALUD. También acepta que las publicaciones electrónicas y las comunicaciones tienen el mismo significado y efecto, tal como si se le hubiera proporcionado una copia en papel.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">4. Modificación de los Términos y Condiciones</h5>
									<p class="info-left">
										ASSIST SALUD se reserva expresamente el derecho a modificar, actualizar o ampliar en cualquier momento los presentes Términos y Condiciones. <br>
										Cualquier modificación, actualización o ampliación producida en los presentes Términos y Condiciones será inmediatamente publicada en la página web de ASSIST SALUD y/o notificada al Usuario al correo electrónico de contacto registrado en su cuenta ASSIST SALUD. Es responsabilidad del Usuario consultar la página web de ASSIST SALUD y el correo electrónico de contacto registrado en su cuenta ASSIST SALUD, con el fin de revisar las modificaciones a los Términos y Condiciones. <br>
										Cada Usuario tendrá el derecho de no aceptar las variaciones de los presentes Términos y Condiciones, en cuyo caso deberá informar a ASSIST SALUD. De verificarse el rechazo por parte de un Usuario a tales modificaciones, se procederá a darse inmediatamente de baja como tal, inhabilitándolo en adelante para la utilización del servicio.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">5. Registro y responsabilidad por contraseñas</h5>
									<p class="info-left">
										El procedimiento de registro en la Web es totalmente gratuito. La cuenta de Usuario no debe incluir el nombre de otra persona con la intención de hacerse pasar por esa persona, ni ser ofensivo, vulgar, obsceno o contrario a la moral y las buenas costumbres. <br>
										Los Usuarios registrados contarán con una contraseña personal con la cual podrán acceder a su cuenta. <br> Cada Usuario es responsable de su propia contraseña, y deberá mantenerla bajo absoluta reserva y confidencialidad, sin revelarla o compartirla, en ningún caso, con terceros. Cada Usuario es responsable de todas las acciones realizadas mediante el uso de su contraseña. <br> Toda acción realizada a través de la cuenta personal de un Usuario se presume realizada por el Usuario titular de dicha cuenta.
										En el caso de que un Usuario identificara que un tercero conociera y usara su contraseña y su cuenta personal, deberá notificarlo de manera inmediata a ASSIST SALUD. <br>
										ASSIST SALUD no será responsable de cualquier daño relacionado con la divulgación del nombre de un Usuario o de su contraseña, o del uso que cualquier persona de al nombre de un Usuario o contraseña. <br>
										ASSIST SALUD puede requerir el cambio de un nombre de Usuario y contraseña cuando considere que la cuenta ya no es segura. Asimismo, puede rechazar el registro de un Usuario, cancelar su cuenta o no permitir el acceso a los servicios que ofrece la Web, a modo de referencia, mas no limitativo, en caso se incumpla con los presentes Términos y Condiciones o se incurra en posibles infracciones de carácter legal o se efectúe un uso inadecuado de la Web.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">6. Propiedad Intelectual</h5>
									<p class="info-left">
										Todos los derechos de propiedad intelectual de la Web y de sus contenidos y diseños pertenecen a ASSIST SALUD o, en su caso, a terceras personas. En aquellos casos en que sean propiedad de terceros contamos con las licencias necesarias para su utilización. <br>
										Quedan expresamente prohibidas la reproducción, distribución, transformación, comunicación pública y puesta a disposición, de la totalidad o parte de los contenidos de la Web, en cualquier soporte y por cualquier medio técnico, sin la autorización de ASSIST SALUD. El Usuario se compromete a respetar los derechos de propiedad industrial e intelectual de titularidad de ASSIST SALUD y de terceros. <br>
										Asimismo, queda expresamente prohibido la utilización o reproducción de cualquier marca registrada, nombre o logotipo que figure en la Web sin la autorización previa y por escrito de ASSIST SALUD, así como la utilización del software que opera la Web con excepción de aquellos usos permitidos bajo estos Términos y Condiciones.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">7. Limitación de responsabilidad e indemnidad</h5>
									<p class="info-left">
										Salvo que así lo establezca la legislación aplicable de obligado cumplimiento, el uso que el Usuario haga de la Web o de todas las funcionalidades que la Web ofrece, incluyendo cualquier contenido, publicación o herramienta contenida en la misma, se ofrece “tal cual” y “según su disponibilidad” sin declaraciones o garantías de ningún tipo, tanto explícitas como implícitas, incluidas entre otras, las garantías de comerciabilidad, adecuación a un fin particular y no incumplimiento. <br> ASSIST SALUD no garantiza que la Web sea siempre seguro o esté libre de errores, ni que funcione siempre sin interrupciones, retrasos o imperfecciones. <br>
										ASSIST SALUD no se hace responsable de los posibles daños o perjuicios en la Web, que se puedan derivar de interferencias, omisiones, interrupciones, virus informáticos, averías o desconexiones en el funcionamiento operativo de este sistema electrónico, de retrasos o bloqueos en el uso de este sistema electrónico causados por deficiencias o sobrecargas en el sistema de Internet o en otros sistemas electrónicos, así como también de daños que puedan ser causados por terceras personas mediante intromisiones ilegítimas fuera del control de ASSIST SALUD. <br>
										Asimismo, ASSIST SALUD no se hace responsable por la calidad, utilidad e idoneidad de los productos o servicios contratados por el Usuario en la Web. <br>Únicamente los establecimientos de salud o de servicios médicos de apoyo son solidariamente responsables por los daños y/o perjuicios que puedan ocasionar al paciente(s), derivados estos del ejercicio negligente, imprudente o imperito de las actividades de los profesionales, técnicos o auxiliares que se desempeñan en éste con relación de dependencia. ASSIST SALUD se encuentra excluido de toda responsabilidad frente a los pacientes por los servicios de salud brindados por los proveedores a los que hayan accedido a través de la Web. El Usuario y sus familiares beneficiarios toman conocimiento de esto y lo aceptan al momento de registrarse en la Web, liberando a ASSIST SALUD de toda responsabilidad por los servicios brindados por los proveedores asociados al sistema. <br>
										En este sentido, ASSIST SALUD no responderá por las posibles reclamaciones que puedan formular los Usuarios relacionadas con la calidad o adecuación de los servicios pagados, ni por cualquier daño o perjuicio que pudiera ocasionar la concreción o falta de concreción de algún servicio. <br> El Usuario conoce y acepta que al realizar las operaciones y al utilizar la Web lo hace bajo su propia cuenta y riesgo, y se compromete a mantener al margen a ASSIST SALUD, sus directivos, empleados, representantes y apoderados de todo reclamo que pueda llegar a entablar en contra de los proveedores de la Web.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">8. Tratamientos de Datos Personales</h5>
									<p class="info-left">
										Los distintos tratamientos de datos personales que ASSIST SALUD realiza a través de la Web, así como las finalidades de dichos tratamientos serán detallados específicamente en la Política de Privacidad de la Web a la que el Usuario podrá acceder a través del siguiente enlace: Política de Privacidad.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">9. Comunicaciones</h5>
									<p class="info-left">
										El Usuario acepta expresamente que la dirección de correo electrónico consignada en el formulario de registro será el medio de contacto oficial entre la Web y el Usuario, siendo absoluta responsabilidad de este último verificar que dicho correo electrónico esté siempre activo y funcional para poder recibir todas las comunicaciones procedentes de la Web. <br>
										Los mensajes o comunicaciones de la Web a los Usuarios sólo pueden provenir de las páginas o cuentas oficiales de éste en redes sociales u otros medios. <br> En caso se detectara que algún Usuario está enviando comunicaciones en nombre de la Web, ASSIST SALUD iniciará las acciones correctivas y legales pertinentes a fin de proteger al resto de Usuarios de posibles riesgos de confusión. <br>
										De otro lado, toda comunicación que el Usuario desee dirigir a la Web deberá realizarla a través de la siguiente dirección de correo electrónico: info@assistsalud.com.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">10. Fuerza mayor</h5>
									<p class="info-left">
										ASSIST SALUD no será responsable por cualquier retraso o falla en el rendimiento o la interrupción en la prestación de los servicios que pueda resultar directa o indirectamente de cualquier causa o circunstancia más allá de su control razonable, incluyendo, pero sin limitarse a fallas en los equipos o las líneas de comunicación electrónica o mecánica, robo, errores del operador, clima severo, terremotos o desastres naturales, huelgas u otros problemas laborales, guerras, o restricciones gubernamentales.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">11. Referencia de Relación</h5>
									<p class="info-left">
										La participación de un Usuario en la Web no constituye ni crea contrato de sociedad, de representación, de mandato, de patrocinio, de aval como así tampoco relación laboral alguna entre dicho Usuario y ASSIST SALUD.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">12. Cesión de posición contractual</h5>
									<p class="info-left">
										Los Usuarios autorizan expresamente la cesión de estos Términos y Condiciones y de su información personal en favor de cualquier persona que (i) quede obligada por estos Términos y Condiciones y/o (ii) que sea el nuevo responsable del banco de datos que contenga su información personal. <br> Luego de producida la cesión, ASSIST SALUD no tendrá ninguna responsabilidad con respecto de cualquier hecho que ocurrirá a partir de la fecha de la cesión. <br> El nuevo responsable del banco de datos asumirá todas y cada una de las obligaciones de ASSIST SALUD establecidas en los presentes Términos y Condiciones y en la Política de Privacidad respecto del tratamiento, resguardo y conservación de la información personal de los usuarios de la Web.
									</p>
								</div>
							</div>
						</div>
						<div class="row" style="margin: 0 !important;">
							<div class="col-md-12">
								<div class="info1">
									<h5 class="info-title info-left">13. Ley aplicable y jurisdicción</h5>
									<p class="info-left">
										Los presentes Términos y Condiciones se rigen y serán aplicados e interpretados de acuerdo con la legislación peruana y cualquier disputa que se produzca con relación a la validez, aplicación o interpretación de los mismos, incluyendo la Política de Privacidad, se someterá al conocimiento de los tribunales con jurisdicción en Lima, Perú.
									</p>
								</div>
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="facturaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog" style="max-width: 420px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h3 class="title-info modal-title text-center" style="font-weight: bold;">¡Pago realizado con éxito!</h3>
			</div>
			<div class="modal-body">
				<form class="form">
					<div class="content-sign-up row" style="margin: 0 !important;">
						<div class="col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Número de pedido:</label>
								<p class="form-control" id="num_pedido" style="text-transform: uppercase;"></p>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Número de tarjeta</label>
								<p class="form-control" id="num_tarjeta" style="text-transform: uppercase;"></p>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Tarjeta</label>
								<p class="form-control" id="marca_tarjeta" style="text-transform: uppercase;"></p>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12">
							<div class="form-group input-group-full label-floating">
								<label class="control-label">Titular</label>
								<p class="form-control" id="titular" style="text-transform: uppercase;"></p>
							</div>
						</div>
						<div class="col-xs-12">
							<br>
						</div>
					</div>
					<div class="footer text-center" style="padding: 0px 15px 10px 15px;position: relative;">
						<a href="{{route('session.login.flg')}}" class="btn btn-success btn-wd" style="width: 100%;">Ir al panel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://pago.culqi.com/api/v1/culqi.js"></script>

<script src="https://test.assistsalud.com/static/js/culqi-helpers.js" type="text/javascript"></script>
<!-- <script src="{{asset('static/js/culqi-helpers.js')}}"></script> -->


<script type="text/javascript">


		//CULQI
		var cod_respuesta = '';
		var info_venta = '';
		var cod_comercio = '';
		var num_pedido = '';
		var msj_respuesta = '';
		var ticket_venta = '';
		var precio_culqi = 0;

		<?php
		if ( Auth::user()->plan_suscripcion == 0 ) {
			$precio = '0.00';
		}
		elseif ( Auth::user()->plan_suscripcion == 1 ) {
			$vendedor = Vendedor::whereCodigo_referencia( Auth::user()->codigo_referencia )->first();
			if ($vendedor) {
				$precio = $precioPersonal-$descuento;
				$original = $precioPersonal;
			}
			else{
				$precio = $precioPersonal;
			}
		}
		elseif ( Auth::user()->plan_suscripcion == 5 ) {
			$vendedor = Vendedor::whereCodigo_referencia( Auth::user()->codigo_referencia )->first();
			if ($vendedor) {
				$precio = $precioFamiliar-$descuento;
				$original = $precioFamiliar;
			}
			else {
				$precio = $precioFamiliar;
			}
		}
		else {
			$precio = '0.00';
		}

		?>

		<?php $precio = number_format((float)$precio, 2, '.', '') ?>

		precio_cul = '{{ $precio }}';

		precio_culqi = precio_cul.split('.').join("");

		function validarCulqi() {

			post_data =
			{
				id_usuario_comercio:      '{{ Auth::user()->id }}',
				nombres:                  '{{ Auth::user()->usuario_nombre }}',
				apellidos:                '{{ Auth::user()->usuario_apepat.' '.Auth::user()->usuario_apemat }}',
				ciudad:                   '{{ Auth::user()->ciudad_codigo }}',
				cod_pais:                 '{{ Auth::user()->pais_cod }}',
				correo_electronico:       '{{ Auth::user()->email }}',
				direccion:                '{{ Auth::user()->c_direccion }}',
				num_tel:                  '{{ str_replace(' ', '', Auth::user()->c_telefono_movil) }}',
				moneda:                   'USD',
				precio: 				  precio_culqi
			}

			$.post("{{url('culqi/validarPago.php')}}", post_data, function(response)
			{

				if (response.cod_respuesta == 'venta_registrada') {
                //Mostrar a Culqi

                // swal(response.cod_respuesta,'success','success');

                //Guardar datos de venta_registrada en variables globales
                cod_respuesta = response.cod_respuesta;
                info_venta = response.info_venta;
                cod_comercio = response.cod_comercio;
                num_pedido = response.num_pedido;
                msj_respuesta = response.msj_respuesta;
                ticket_venta = response.ticket_venta;

                checkout.codigo_comercio = cod_comercio;
                checkout.informacion_venta = info_venta;

                // console.log(response);

                $('.gif-register').show();
                checkout.abrir();
            }
            else {
                //Respuesta error
                swal(response.cod_respuesta,'error','error');
            }
        }, 'json');
		}

		function culqi(checkout)
		{
			// $('.spin-assistsalud').hide();
        // Aquí recibes la respuesta del formulario de pago.
        // Si el usuario cierra el formulario de pago: checkout.respuesta tendrá en valor "checkout_cerrado"

        // console.log(checkout.respuesta);
        
        // Cierra el formulario de pago de Culqi.
        checkout.cerrar();
        // Envía la respuesta cifrada que recibiste del formulario de Culqi a tu
        // servidor para descifrarlo, tu servidor lo descifra con la librería
        // de culqi y con esos datos muestra la vista de venta realizada
        var json = JSON.stringify({
        	informacionDeVentaCifrada: checkout.respuesta
        });
        
        post_data = 
        {
        	venta_cifrada : checkout.respuesta
        }
        
        $.post("{{url('culqi/descifrarRespuesta.php')}}", post_data, function(response)
        {
        	if(response.mensaje_respuesta == 'Su compra ha sido exitosa.')
        	{
        		var respuesta_culqi = response.mensaje_respuesta;
        		var num_pedido = response.num_pedido;
        		var num_tarjeta = response.num_tarjeta;
        		var marca_tarjeta = response.marca_tarjeta;
        		var titular_nombre = response.titular_nombre;
        		var titular_apellido = response.titular_apellido;
        		var fecha = response.fecha;

        		$('#num_pedido').html(num_pedido);
        		$('#num_tarjeta').html(num_tarjeta);
        		$('#marca_tarjeta').html(marca_tarjeta);
        		$('#titular').html(titular_nombre+' '+titular_apellido);

        		var id_usuario_session = "{{ Auth::user()->id }}";

        		$('#facturaModal').modal('show'); 

        		/*Guardar en la BD el pago y el flag del usuario*/
        		$.post("{{route('suscripcion.pago.post')}}", function (response) {

        			if (response.type == 'exito') {

        				$('.siguiente-paso').hide();
        				$('.img-gif').hide();
        				$('.ir-panel').show();


      //           		setTimeout(function(){
						// 	window.location.href = "{{route('cuenta.panel')}}";
	     //                	return false;
						// }, 1000);

                		// post_data_correo =
                		// {
                		// 	correo: "{{ Auth::user()->email }}"
                		// }
	                  //       //Finalizar compra
	                  //       $.post('assets/email/enviar-factura-suscripcion.php', post_data_correo, function (response) {
	                  //       	console.log(response.type + " " + response.text);
	                  //       	if (response.type == 'enviado') {
	                  //       		SiguientePaso5();
	                  //       	}
	                  //       	else {
	                  //               //Respuesta error
	                  //           }
	                  //       }, 'json');

	              }

	          }, 'json');

        		console.log('Despues de peticion AJAX update-suscripcion.php');


        	} else if (response.mensaje_respuesta == 'El código de seguridad (CVV) de su tarjeta es inválido. Intente nuevamente ó utilice otra tarjeta.') {
        		$('#modalMensaje .modal-body #status-msg').text('El código de seguridad (CVV) de su tarjeta es inválido. Intente nuevamente ó utilice otra tarjeta.');
        		$('#modalMensaje').modal('show');
        	} else if (response.mensaje_respuesta == 'La fecha de expiración de su tarjeta es inválida. Intente nuevamente ó utilice otra tarjeta.') {
        		$('#modalMensaje .modal-body #status-msg').text('La fecha de expiración de su tarjeta es inválida. Intente nuevamente ó utilice otra tarjeta.');
        		$('#modalMensaje').modal('show');
        	}
        	else {
        		$('#modalMensaje .modal-body #status-msg').text(response.mensaje_respuesta);
        		$('#modalMensaje').modal('show');
        	}
        }, 'json');
    };


    $('#paso-pago').click(function(e){
    	e.preventDefault();
    	if( !$("input[name='terminos']:checked").val() ) {
    		swal("¡Debes aceptar los términos!");
    		return false;
    	}

    	validarCulqi();

    });

</script>


@stop