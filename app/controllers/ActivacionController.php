<?php

class ActivacionController extends BaseController {

	public function __construct()
	{
        // $this->beforeFilter(function()
        // {
        //     if ( Auth::guest() ) {
        //     	return Redirect::route('session.ingresar');
        //     }
        // });
	}

	public function espera($codigo = null)
	{
		
		if ( Auth::check() and is_null($codigo) ) {
			if ( Auth::user()->flg_estado == 1 ) {
				return Redirect::route('suscripcion.plan');
			}
			if ( Auth::user()->flg_estado == 2 ) {
				return Redirect::route('cuenta.panel');
			}
			return View::make('activacion.espera');
		}

		$usuario = User::whereCodigo_verificacion($codigo)->first();

		if (!isset($usuario)) {
			if ( Auth::check() ) {
				return View::make('activacion.espera');
			}
			else{
				return Redirect::route('session.ingresar');
			}
		}

		if ( $usuario->flg_estado == 1 ) {
			Auth::login($usuario);
			return Redirect::route('suscripcion.plan');
		}
		if ( $usuario->flg_estado == 2 ) {
			Auth::login($usuario);
			return Redirect::route('cuenta.panel');
		}

		Auth::login($usuario);
		$user = User::find( $usuario->id );
		$user->flg_estado = 1;
		$user->save();
		return Redirect::route('suscripcion.plan');
	}

	public function resend_email()
	{
		if ( Auth::guest() ) {
			return 'error';
		}
		# Verificamos una consulta AJAX
		if (Request::ajax() === false)
		{
			return 'error';
		}
		# Verificamos que no haya código malicioso
		if (Purifier::clean(Input::get('email')) == '' ) {
			return 'error';
		}
		# Verificamos que no haya un usuario con el email ingresado
		if (Auth::user()->flg_estado == 1) {
			return 'activado';
		}
		# Verificamos que la cuenta no este activada
		$user = User::where('id','!=',Auth::user()->id)->where('email','=', Purifier::clean(Input::get('email')) )->first();
		if ($user) {
			return 'error-existe-email';
		}

		# Codigo de verificacion
		$codigo_verificacion = uniqid().rand(66666, 666666666);

		# Actualizando correo
		$user = User::find(Auth::user()->id);
		$user->codigo_verificacion 	= $codigo_verificacion;
		$user->email 				= Purifier::clean(Input::get('email'));
		$user->save();

		Mail::send('emails.registro', array( 'codigo_verificacion'=>$codigo_verificacion), function($message)
		{
			$message->from('info@assistsalud.com', 'Activación de Cuenta - Assist Salud');
			$message->to( Purifier::clean(Input::get('email')) );
			$message->subject('Registro de Assist Salud');
		});

		return 'exito';


		// $servicio_cadena = array();

		// foreach (Input::get('subtotal') as $subtotal) {
		// 	if ( $subtotal != '' ) {
		// 		$servicio_cadena[] = $subtotal;
		// 	}
		// }

		// return $servicio_cadena;


	}

	public function cobertura()
	{
		//
	}


	// $code = '743243763634kuhfihfdsdiuf';

	// foreach (UsercourseMaterial() as $key => $value) {
	// 	# material_id
	// 	# usuario_id
	// 	# time

	// 	$promedio = UsercourseMaterial::sum('time')/Studentcourse::count();

	// 	$studentMaterial
	// 	# student_id
	// 	# material_id

	// 	$nextGrade: // Asociado al material anterior que entregaste
	// 				// Comparamos las nota del grupo que entraron con los que no entraron


	// 	// Material para todos por defecto, en caso quieran dar un material para un grupo selecto,
	// 	// el envío debe ser por otro medio (Pierde info de trackeo)


	// 	// Profesor que ha hecho mayor impacto en los alumnos

	// 	// Promedio inicial y el promedio final
	// 	// Evaluacion diagnostico

	// }



	# Login PHP - Laravel
	# Panel PHP - Laravel
	# Panel Estadistica XS: PHP - Laravel

	# Panel Estaditisica LG: http:URL de consulta
		# alumno_id, profesor_id, salon_id, horario_id
		# consulta_id
		# LLega a la URL (python data analytics) - Consumir mysql (100 000 a menos) o posgreSQL
		# Nos devuelve un json
		# Recibimos y pintamos




}
