<?php

class PanelController extends BaseController {

	protected $layout = 'cms/layout';

	public function index(){

		$empresas=Empresa::all();
		
		return View::make('panel/index',compact('empresas'));

	}


}