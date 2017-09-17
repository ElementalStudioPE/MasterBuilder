<!doctype html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta charset="UTF-8">
  <title>MasterBuilder</title>
  {{ HTML::style('css/cms/reset.css') }}
  {{ HTML::style('css/cms/shapes.css') }}
  {{ HTML::style('css/cms/style.css') }}

  {{ HTML::style('css/cms/datepicker.css') }}
</head>
<body>
  <div class="wrapper clearfix">
    <div class="header">
      <div class="logo"></div>
    </div>
    <a href="{{ route('empresa.show', $empresa->id) }}" class="btn-salir"><p>Cerrar sesión</p></a>
    <div class="section">
      @yield('content')
    </div>
  {{ HTML::script('js/cms/jquery.1.3.js') }}
  {{ HTML::script('js/jquery.validate.js') }}
  {{ HTML::script('js/jquery.alphanumeric.js') }}
  {{ HTML::script('js/jquery.placeholder.js') }}
  {{ HTML::script('js/validation.js') }}


  {{ HTML::script('js/cms/datepicker.js') }}
  {{ HTML::script('js/cms/eye.js') }}
  {{ HTML::script('js/cms/utils.js') }}
  {{ HTML::script('js/cms/layout.js?ver=1.0.2') }}

</body>
</html>