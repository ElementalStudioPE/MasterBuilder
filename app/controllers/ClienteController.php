<?php

class ClienteController extends BaseController {

	protected $layout = 'panel/layouts/master';

	public function create($empresaId){
			$empresa=Empresa::where('id',$empresaId)->first();
		return View::make('panel.cliente.create',compact('empresa'));
	}

	public function store(){

		if ( Input::get('first_name') =='' or Input::get('email') =='' ) {
			Session::flash('message', '¡Complete Field Required');
		    return Redirect::back();
		}

		$objeto = new Cliente();
		$objeto->first_name      	= Input::get('first_name');
		$objeto->last_name      	= Input::get('last_name');
		$objeto->full_name      	= Input::get('first_name').' '.Input::get('last_name');
		$objeto->email 				= Input::get('email');
		$objeto->mobile_phone 		= Input::get('mobile_phone');
		$objeto->cliente_empresa 	= Input::get('cliente_empresa');
		$objeto->save();

		Session::flash('message', 'User added');
		return Redirect::back();
	}

	public function show($empresaId,$clienteId){
				$empresa=Empresa::where('id',$empresaId)->first();
		return View::make('panel.cliente.show',compact('empresa'));
	}

	public function edit($empresaId,$clienteId){
				$empresa=Empresa::where('id',$empresaId)->first();
				$cliente=Cliente::where('id',$clienteId)->first();
		return View::make('panel.cliente.edit',compact('empresa','cliente'));
	}
	public function update($empresaId,$clienteId){

		if ( Input::get('first_name') =='' or Input::get('email') =='' ) {
			Session::flash('message', '¡Complete Field Required');
		    return Redirect::back();
		}

		$objeto = Cliente::find($clienteId);
		$objeto->first_name      	= Input::get('first_name');
		$objeto->last_name      	= Input::get('last_name');
		$objeto->email 				= Input::get('email');
		$objeto->mobile_phone 		= Input::get('mobile_phone');
		$objeto->cliente_empresa 	= Input::get('cliente_empresa');
		$objeto->save();
		Session::flash('message', 'User information updated');
		return Redirect::back();
	}

}