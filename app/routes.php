<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



// Rutas principales
Route::get('/', array('as' => 'principal.home','uses' => 'PrincipalController@home'));
Route::post('/ingresar', array('as' => 'session.ingresar','uses' => 'SessionController@ingresar'));
Route::get('/salir', array('as' => 'session.salir','uses' => 'SessionController@salir'));

Route::get('/panel', array('as' => 'panel.index','uses' => 'PanelController@index'));

// Rutas de la empresa
Route::get('bussines-create', array('as' => 'empresa.create','uses' => 'EmpresaController@create'));
Route::post('bussines-store', array('as' => 'empresa.store','uses' => 'EmpresaController@store'));
Route::get('bussines/{empresa}', array('as' => 'empresa.show','uses' => 'EmpresaController@show'));
Route::get('bussines/{empresa}/edit', array('as' => 'empresa.edit','uses' => 'EmpresaController@edit'));
Route::post('bussines/{empresa}/update', array('as' => 'empresa.update','uses' => 'EmpresaController@update'));

Route::get('bussines/{empresa}/constructor', array('as' => 'mailing.create','uses' => 'MailingController@create'));

Route::post('bussines/{empresa}/template/crear', array('as' => 'empresa.templates.crear','uses' => 'EmpresaController@templates_crear'));
Route::get('bussines/{empresa}/templates/{template}/edit', array('as' => 'empresa.templates.edit','uses' => 'EmpresaController@templates_edit'));
Route::post('bussines/{empresa}/templates/{template}/update', array('as' => 'empresa.templates.update','uses' => 'EmpresaController@templates_update'));

Route::get('bussines/{empresa}/cliente/crear', array('as' => 'clientes.create','uses' => 'ClienteController@create'));
Route::post('bussines/{empresa}/cliente/store', array('as' => 'clientes.store','uses' => 'ClienteController@store'));
Route::get('bussines/{empresa}/clientes/{cliente}', array('as' => 'clientes.show','uses' => 'ClienteController@show'));
Route::get('bussines/{empresa}/clientes/{cliente}/edit', array('as' => 'clientes.edit','uses' => 'ClienteController@edit'));
Route::post('bussines/{empresa}/clientes/{cliente}/update', array('as' => 'clientes.update','uses' => 'ClienteController@update'));


/*ADMIN**/

// Route::get('/', array('uses' => 'HomeController@showLogin'));
// Route::get('/login', array('uses' => 'HomeController@showLogin'));
// Route::post('/login', array('uses' => 'HomeController@doLogin'));
// Route::get('/logout', array('uses' => 'HomeController@doLogout', 'before' => 'auth'));

Route::group(array('before' => 'auth'), function()
{
  
  // Route::get('/constructor', array('uses' => 'HomeController@constructor'));
  Route::post('/image', array('uses' => 'HomeController@saveImage'));
  Route::post('/replace', array('uses' => 'HomeController@caracteresHTML'));
  // Route::get('/logout', array('uses' => 'HomeController@doLogout'));
});


Route::get('/crear-usuario', function(){

  $usuario = new User();
  $usuario->username  = 'admin';
  $usuario->email     = 'admin@ess.pe';
  $usuario->password  = Hash::make('admin123');
  $usuario->save();

  return 'usuario creado con éxito';

});