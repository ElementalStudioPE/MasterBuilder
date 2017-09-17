<?php

class SuscripcionController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter(function()
		{
			if ( Auth::guest() ) {
				return Redirect::route('session.ingresar');
			}
			if (Auth::user()->flg_estado == 0) {
				return Redirect::route('activacion.espera');
			}
		});
	}

	public function plan()
	{
		if (Auth::user()->flg_estado == 2) {
			return Redirect::route('cuenta.panel');
		}
		return View::make('suscripcion.plan');
	}
 
	public function plan_post()
	{
		if (Auth::user()->flg_estado == 2) {
			return 'estado-cuenta';
		}
		if (Purifier::clean( Input::get('plan') ) != 1 and Purifier::clean( Input::get('plan') ) != 5) {
			return 'error';
		}
		$user = User::find(Auth::user()->id);
		$user->plan_suscripcion  = Purifier::clean( Input::get('plan') );
		$user->codigo_referencia = Purifier::clean( Input::get('codigo_vendedor') );
		$vendedor = Vendedor::whereCodigo_referencia( Purifier::clean(Input::get('codigo_vendedor')) )->first();
		if ( $vendedor ) {
			$user->vendedor_id = $vendedor->id;
			
			$numReferidos = $vendedor->n_referidos+1;
			$vend = Vendedor::find($vendedor->id);
			$vend->n_referidos 	= $numReferidos;
			$vend->save();
		}
		$user->save();
		return 'exito';
	}

	public function plan_codigo()
	{
		if ( Auth::user()->flg_estado == 2 ) {
			return 'estado-cuenta';
		}
		if ( Purifier::clean(Input::get('codigo_vendedor')) == '' ) {
			return 'error';
		}

		$vendedor = Vendedor::whereCodigo_referencia( Purifier::clean(Input::get('codigo_vendedor')) )->first();
		if (!isset($vendedor)) {
			return 'error';
		}
		return 'exito';
	}

	public function datos()
	{
		if (Auth::user()->flg_estado == 2) {
			return Redirect::route('cuenta.panel');
		}
		return View::make('suscripcion.datos');
	}

	public function datos_post()
	{
		if (Auth::user()->flg_estado == 2) {
			return 'error-estado';
		}
		## Codigo de validacion
		// return 'error';
		##

		$user = User::find(Auth::user()->id);
		$user->usuario_nombres = Purifier::clean( Input::get('usuario_nombres') );
		$user->usuario_apepat = Purifier::clean( Input::get('usuario_apepat') );
		// $user->usuario_apemat = Purifier::clean( Input::get('usuario_apemat') );
		$user->c_tipo_documento = Purifier::clean( Input::get('c_tipo_documento') );
		$user->c_tipo_documento = Purifier::clean( Input::get('c_tipo_documento') );
		$user->c_numero_documento = Purifier::clean( Input::get('c_numero_documento') );
		$user->d_nacimiento = Purifier::clean( Input::get('d_nacimiento') );
		$user->c_sexo = Purifier::clean( Input::get('c_sexo') );
		$user->c_telefono_fijo = Purifier::clean( Input::get('c_telefono_fijo') );
		$user->c_telefono_movil = Purifier::clean( Input::get('c_telefono_movil') );
		$user->pais_cod = Purifier::clean( Input::get('pais_cod') );
		$user->ciudad_codigo = Purifier::clean( Input::get('ciudad_codigo') );
		$user->postal_codigo = Purifier::clean( Input::get('postal_codigo') );
		$user->c_direccion = Purifier::clean( Input::get('c_direccion') );
		$user->save();

		return 'exito';
	}

	public function pago()
	{

		// $nombre = Auth::user()->usuario_nombres;

		// if ( Auth::user()->plan_suscripcion == 1 ) {
		// 	Mail::send('emails.factura-suscripcion-personal', array( 'nombre'=>$nombre), function($message)
		// 	{
		// 		$message->from('info@assistsalud.com', 'Suscripcion de Cuenta - Assist Salud');
		// 		$message->to( Auth::user()->email );
		// 		$message->subject('Suscripcion de Assist Salud');
		// 	});
		// }
		// elseif ( Auth::user()->plan_suscripcion == 5 ) {
		//  	Mail::send('emails.factura-suscripcion-familiar', array( 'nombre'=>$nombre), function($message)
		// 	{
		// 		$message->from('info@assistsalud.com', 'Suscripcion de Cuenta - Assist Salud');
		// 		$message->to( Auth::user()->email );
		// 		$message->subject('Suscripcion de Assist Salud');
		// 	});
		// } else {
		// 	//
		// }
		
		if (Auth::user()->flg_estado == 2) {
			return Redirect::route('cuenta.panel');
		}
		return View::make('suscripcion.pago');
	}

	public function pago_post()
	{

		$user = User::find(Auth::user()->id);
		$user->flg_estado = 2;
		$user->save();

		$afiliado = new Afiliado();
		$afiliado->usuario_codigo 			= Auth::user()->usuario_codigo;
		$afiliado->afiliado_nombre 			= Auth::user()->usuario_nombre;
		$afiliado->afiliado_nombres 		= Auth::user()->usuario_nombres;
		$afiliado->afiliado_apepat 			= Auth::user()->usuario_apepat;
		$afiliado->afiliado_apemat 			= Auth::user()->usuario_apemat;
		$afiliado->codigo_unico_afiliado 	= Auth::user()->codigo_unico_usuario;
		$afiliado->d_nacimiento 			= Auth::user()->d_nacimiento;
		$afiliado->c_sexo 					= Auth::user()->c_sexo;
		$afiliado->c_tipo_documento 		= Auth::user()->c_tipo_documento;
		$afiliado->c_numero_documento 		= Auth::user()->c_numero_documento;
		$afiliado->save();

		if (Auth::user()->codigo_referencia != '') {
			$vendedor = Vendedor::whereCodigo_referencia( Auth::user()->codigo_referencia )->first();
			if ($vendedor) {
				$numReferidosPagados = $vendedor->n_referidos_pagados+1;
				$vend = Vendedor::find($vendedor->id);
				$vend->n_referidos_pagados 	= $numReferidosPagados;
				$vend->save();
			}
		}

		$nombre = Auth::user()->usuario_nombres;

		if ( Auth::user()->plan_suscripcion == 1 ) {
			Mail::send('emails.factura-suscripcion-personal', array( 'nombre'=>$nombre), function($message)
			{
				$message->from('info@assistsalud.com', 'Suscripcion de Cuenta - Assist Salud');
				$message->to( Auth::user()->email );
				$message->subject('Suscripcion de Assist Salud');
			});
		}
		elseif ( Auth::user()->plan_suscripcion == 5 ) {
		 	Mail::send('emails.factura-suscripcion-familiar', array( 'nombre'=>$nombre), function($message)
			{
				$message->from('info@assistsalud.com', 'Suscripcion de Cuenta - Assist Salud');
				$message->to( Auth::user()->email );
				$message->subject('Suscripcion de Assist Salud');
			});
		} else {
			//
		}

		return json_encode(array('type'=>'exito', 'text' => "¡Todo OK!"));
	}

}
