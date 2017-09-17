<?php

class SessionController extends BaseController {

	protected $layout = 'cms/layout';

  public function ingresar(){
    $rules = array(
      'username'    => 'required',
      'password' => 'required|alphaNum|min:3'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return Redirect::route('principal.home')
        ->withErrors($validator) 
        ->withInput(Input::except('password')); 
    } else {
      $userdata = array(
        'username'  => Input::get('username'),
        'password'  => Input::get('password')
      );

      if (Auth::attempt($userdata)) {
        return Redirect::route('panel.index');
      } else {
        return Redirect::route('principal.home');
      }

    }
  }

   public function salir(){
    Auth::logout();
      return Redirect::route('principal.home');
  }



}