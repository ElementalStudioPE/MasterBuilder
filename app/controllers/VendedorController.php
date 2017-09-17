<?php

class VendedorController extends BaseController {

	public function inicio()
	{
		return View::make('vendedor.inicio');
	}

	public function generar()
	{
		if( Purifier::clean(Input::get('nombre')) == '' ){
            return 'error-nombre';
        }
        if( Purifier::clean(Input::get('apellido')) == '' ){
            return 'error-apellido';
        }
        if( Purifier::clean(Input::get('email')) == '' ){
            return 'error-email';
        }
        # Validamos que no exista un usuario con el mismo correo
        $correoValido = Vendedor::whereVendedor_correo(Purifier::clean(Input::get('email')))->first();
        if ($correoValido) {
            return 'error-email-existe';
        }

        $codigo_unico = rand(111111, 99999999).uniqid().rand(66666, 666666666);

        $unico = 0;
        while ($unico == 0) {
            $codigoreferencia = strtoupper( str_random(5) );
            $VendedorUnico = Vendedor::whereCodigo_referencia($codigoreferencia)->first();
            if(!isset($VendedorUnico)) {
                $unico = 1;
            }
        }

        $user = new Vendedor();
        $user->vendedor_nombre      = Purifier::clean(Input::get('nombre'));
        $user->vendedor_apellido  	= Purifier::clean(Input::get('apellido'));
        $user->vendedor_correo   	= Purifier::clean(Input::get('email'));
        $user->codigo_referencia   	= $codigoreferencia;
        $user->codigo_unico 		= $codigo_unico;
        $user->save();


        Mail::send('emails.vendedor', array( 'codigo_unico'=>$codigo_unico, 'nombre'=>Purifier::clean(Input::get('nombre'))), function($message)
	    {
	        $message->from('info@assistsalud.com', 'Descuentos - Assist Salud');
	        $message->to( Purifier::clean(Input::get('email')) );
	        $message->subject('Código de descuento Assist Salud');
	    });


        return 'exito';

	}

	public function panel($codigoUnicoVendedor)
	{
		$vendedor = Vendedor::whereCodigo_unico($codigoUnicoVendedor)->first();
		// $vendedor = Vendedor::whereCodigo_referencia($codigoVendedor)->first();
		if (!$vendedor) {
			return Redirect::route('vendedor.inicio');
		}
		return View::make('vendedor.panel',compact('vendedor'));
	}

}
