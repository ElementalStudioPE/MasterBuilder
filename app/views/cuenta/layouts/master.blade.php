<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="" />
	<link rel="icon" type="image/png" href="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Assist Salud</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- <link href="{{asset('static/cuenta/css/bootstrap.min.css')}}" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/cuenta/css/bootstrap.min.css">
	<!-- <link href="{{asset('static/cuenta/css/material-dashboard.css')}}" rel="stylesheet"/> -->
	<link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/cuenta/css/material-dashboard.css">

	<!-- <link href="{{asset('static/cuenta/css/demo.css')}}" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/cuenta/css/demo.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<!-- <link href="{{asset('static/css/sweetalert.css')}}" rel="stylesheet"/> -->
	<link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/sweetalert.css">
	@yield('css')

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86921924-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
	<div class="wrapper">
		@include('cuenta.layouts.sidebar')
		<div class="main-panel">
			@include('cuenta.layouts.nav')
			
			@yield('content')

			@include('cuenta.layouts.footer')
		</div>
	</div>
</body>
<!--   Core JS Files   -->
<!-- <script src="{{asset('static/cuenta/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/cuenta/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/cuenta/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/cuenta/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('static/cuenta/js/material-dashboard.js')}}"></script>
<script src="{{asset('static/cuenta/js/demo.js')}}"></script>
<script src="{{asset('static/js/sweetalert.js')}}" type="text/javascript"></script> -->
<script src="https://assistsalud.com/static/cuenta/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/cuenta/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/cuenta/js/material.min.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/cuenta/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/cuenta/js/material-dashboard.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/cuenta/js/demo.js" type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/sweetalert.js" type="text/javascript"></script>

@yield('js')
</html>