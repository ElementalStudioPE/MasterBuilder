<?php

class MailingController extends BaseController {

	protected $layout = 'cms/layout';

	public function create($empresaId){

		$empresa=Empresa::where('id',$empresaId)->first();		
		return View::make('panel.mailing.create',compact('empresa'));

	}


}