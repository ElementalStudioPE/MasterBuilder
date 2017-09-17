<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'cms/layout';
  /************************************************************************************/
  public function saveImage()
  {

    $data = Input::get('image');
    $id   = Input::get('id') ;
    $directory = Input::get('directory') ;
    $date = date("Y-m-d");


    $name      = 'imagen-' . $id .'.jpg';
    $extension = explode(",", $data);

    /****************************/
    $directory = $date . "-" . str_replace(' ','_',$directory);
    $path = public_path().'/images/uploads/' . $directory;
    File::makeDirectory($path, $mode = 0777, true, true);
    /****************************/

    $data = str_replace($extension[0].',', '', $data);
    $data = str_replace(' ', '+', $data);
    $data = base64_decode($data);
    $path = public_path() . "/images/uploads/" . $directory . "/" . $name;
    $success = file_put_contents($path, $data);

    $rootReturn = base_path() . "/images/uploads/" . $directory . "/" . $name;

    return URL::to("/images/uploads/" . $directory . "/" . $name);
  }
  
  public function constructor()
  {
    return View::make('home');
  }

  public function caracteresHTML(){

    $string = Input::get('string');
    $search  = array(
             'À','Á','Â','Ã','Ä','Å',
             'à','á','â','ã','ä','å',

             'È','É','Ê','Ë',
             'è','é','ê','ë',

             'Ì','Í','Î','Ï',
             'ì','í','î','ï',

             'Ò','Ó','Ô','Õ','Ö','Ø',
             'ò','ó','ô','õ','ö','ø',

             'Ù','Ú','Û','Ü',
             'ù','ú','û','ü',

             'Ÿ',
             'ÿ',

             'Ç',
             'ç',

             'Ñ',
             'ñ',

             '—','°','©','®',
             '«', '»',
             '¼','½','¾',
             '¿','×','÷',
             '“','”','‘','’'
            );

    $replace = array(
             '&Agrave;','&Aacute;','&Acirc;','&Atilde;','&Auml;','&Aring;',
             '&agrave;','&aacute;','&acirc;','&atilde;','&auml;','&aring;',

             '&Egrave;','&Eacute;','&Ecirc;','&Euml;',
             '&egrave;','&eacute;','&ecirc;','&euml;',

             '&Igrave;','&Iacute;','&Icirc;','&Iuml;',
             '&igrave;','&iacute;','&icirc;','&iuml;',

             '&Ograve;','&Oacute;','&Ocirc;','&Otilde;','&Ouml;','&Oslash;',
             '&ograve;','&oacute;','&ocirc;','&otilde;','&ouml;','&oslash;',

             '&Ugrave;','&Uacute;','&Ucirc;','&Uuml;',
             '&ugrave;','&uacute;','&ucirc;','&uuml;',

             '&Yuml;',
             '&yuml;',

             '&Ccedil;',
             '&ccedil;',

             '&Ntilde;',
             '&ntilde;',

             '&mdash;','&deg;','&copy;','&reg;',
             '&laquo;','&raquo;',
             '&frac14;','&frac12;','&frac34;',
             '&iquest;','&times;','&divide;',
             '&ldquo;','&rdquo;','&lsquo;','&rsquo;'
            );

    return stripslashes(str_replace($search, $replace, $string));
  }

}