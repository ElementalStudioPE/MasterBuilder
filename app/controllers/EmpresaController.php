<?php

class EmpresaController extends BaseController {

	protected $layout = 'panel/layouts/master';

	public function create(){
		return View::make('panel.empresa/create');
	}

	public function store(){

		if ( Input::get('nombre_empresa') =='' or Input::get('first_name') =='' or Input::get('last_name') =='' or Input::get('email') =='' ) {
			Session::flash('message', '¡Completa los campos obligatorios!');
		    return Redirect::back();
		}

		$objeto = new Empresa();
		$objeto->nombre_empresa = Input::get('nombre_empresa');
		$objeto->first_name     = Input::get('first_name');
		$objeto->last_name 		= Input::get('last_name');
		$objeto->email 			= Input::get('email');
		$objeto->save();

		Session::flash('message', 'Se agrego empresa!');
		return Redirect::route('panel.index');

	}

	public function show($id){
		$empresa=Empresa::where('id',$id)->first();
		$clientes=Cliente::where('cliente_empresa',$id)->get();
	
		return View::make('panel.empresa/show',compact('empresa','clientes'));
	}

	public function edit($id){
		$empresa=Empresa::where('id',$id)->first();
		return View::make('panel.empresa/edit',compact('empresa'));
	}

	public function update($id){
		if ( Input::get('nombre_empresa') =='' or Input::get('first_name') =='' or Input::get('last_name') =='' or Input::get('email') =='' ) {
			Session::flash('message', '¡Completa los campos obligatorios!');
		    return Redirect::back();
		}

		$empresa=Empresa::find($id);
		$empresa->nombre_empresa    = Input::get('nombre_empresa');
		$empresa->first_name      	= Input::get('first_name');
		$empresa->last_name 		= Input::get('last_name');
		$empresa->email 			= Input::get('email');
		$empresa->save();
		Session::flash('message', 'Business information updated');
		return Redirect::back();

	}

}