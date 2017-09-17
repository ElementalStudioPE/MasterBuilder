<html lang="es-PE">
<head>

  <meta charset="UTF-8">
  <title>MasterBuilder</title>
  {{ HTML::style('css/cms/reset.css') }}
  {{ HTML::style('css/cms/style.css') }}

  <style type="text/css">
   @charset "utf-8";
   /* CSS Document */

   /* ---------- FONTAWESOME ---------- */
   /* ---------- http://fortawesome.github.com/Font-Awesome/ ---------- */
   /* ---------- http://weloveiconfonts.com/ ---------- */

   @import url(http://weloveiconfonts.com/api/?family=fontawesome);

   /* ---------- ERIC MEYER'S RESET CSS ---------- */
   /* ---------- http://meyerweb.com/eric/tools/css/reset/ ---------- */

   @import url(http://meyerweb.com/eric/tools/css/reset/reset.css);

   /* ---------- FONTAWESOME ---------- */

   [class*="fontawesome-"]:before {
    font-family: 'FontAwesome', sans-serif;
  }

  /* ---------- GENERAL ---------- */

  body {
    background: #f4f4f4;
    color: #292929;
    font: 100%/1.5em 'Open Sans', sans-serif;
    margin: 0;
  }
  body {
    height: inherit !important;
    min-height: inherit !important;
    font-family: 'stag_sansmedium';
  }

  a { text-decoration: none; }

  h1 { font-size: 1em; }

  h1, p {
    margin-bottom: 10px;
  }

  strong {
    font-weight: bold;
  }

  .uppercase { text-transform: uppercase; }

  /* ---------- LOGIN ---------- */

  #login {
    margin: 50px auto;
    width: 300px;
  }
  #access input[type=text],
  #access input[type=password],
  select{
    border: inherit !important;
  }

  form fieldset input[type="text"], input[type="password"] {
    background: #e5e5e5;
    border: none;
    border-radius: 3px;
    color: #5a5656;
    font-family: inherit;
    font-size: 14px;
    height: 50px;
    outline: none;
    padding: 0px 10px;
    width: 280px;
    -webkit-appearance:none;
  }

  form fieldset input[type="submit"] {
    background-color: #008dde;
    border: none;
    border-radius: 3px;
    color: #f4f4f4;
    cursor: pointer;
    font-family: inherit;
    height: 50px;
    text-transform: uppercase;
    width: 300px;
    -webkit-appearance:none;
  }

  form fieldset a {
    color: #5a5656;
    font-size: 10px;
  }

  form fieldset a:hover { text-decoration: underline; }

  .btn-round {
    background: #5a5656;
    border-radius: 50%;
    color: #f4f4f4;
    display: block;
    font-size: 12px;
    height: 50px;
    line-height: 50px;
    margin: 30px 125px;
    text-align: center;
    text-transform: uppercase;
    width: 50px;
  }
  #login-new {
    margin: 50px auto;
    max-width: 500px;
    width: 100%;
  }
</style>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>
  <div id="login-new">
    <div>
      <p style="max-width: 150px;margin: 0 auto;">
        <img src="{{asset('static/img/ess-logo-black.png')}}" style="width: 100%;">
      </p>
      <br>
    </div>
    <h1 style="text-align: center;">
      <strong>Bienvenido</strong> Por favor, ingresa a tu cuenta
    </h1>
    {{ Form::open(array('route' => 'session.ingresar', 'id'=>'access', 'class'=>'form-login')) }}
    <fieldset>
     @if(Session::get('msg'))
     <p class='errorLogin'>{{ Session::get('msg') }}</p>
     @endif
     <div class='errorHolder'></div>
     {{ Form::open(array('url' => 'login', 'id'=>'access', 'class'=>'form-login')) }}

     <!-- if there are login errors, show them here -->
     @if (Session::get('loginError'))
     <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
     <br>
     @endif
     <p>
      {{ Form::text('username', Input::old('username'), array('placeholder' => 'Usuario', 'required' => true)) }}          
    </p>
    <p>
      {{ Form::password('password', array('placeholder' => 'Clave', 'required' => true)) }}          
    </p>
    <div class="clear"></div>        
    <p><input type="submit" value="Ingresar" ></p>
    <p style="color: #ef1111;font-weight: 100 !important;">{{ $errors->first('username') }}</p>
    <p style="color: #ef1111;font-weight: 100 !important;">{{ $errors->first('password') }}</p>
  </fieldset>
  {{ Form::close() }}
</div>
</body>
</html>