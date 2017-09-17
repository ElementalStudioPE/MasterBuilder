<?php

class PrincipalController extends BaseController {

	protected $layout = 'cms/layout';

  public function home(){

    if (Auth::check()) {
      return Redirect::route('panel.index');
    }
    else{
      return View::make('cms/login');
    }

  }



}