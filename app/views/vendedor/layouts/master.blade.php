<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-kit-pro/examples/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2016 20:03:02 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Assist Salud - Vendedor</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!-- Canonical SEO -->
	<link rel="canonical" href="{{route('principal.inicio')}}" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<!-- CSS Files -->
	<link href="{{asset('static/vendedor/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('static/vendedor/css/material-kit.css')}}" rel="stylesheet"/>
	<link href="{{asset('static/css/sweetalert.css')}}" rel="stylesheet"/>
	@yield('css')
</head>

<body class="login-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<img src="{{asset('static/vendedor/img/logo-top.png')}}" alt="" style="max-width: 170px;">
			</div>
		</div>
	</nav>

	<div class="page-header header-filter" style="background-image: url({{asset('static/vendedor/img/background.jpg')}}); background-size: cover; background-position: top center;">
		@yield('content')
		<footer class="footer">
			<div class="container">
				<div class="copyright pull-right">
					2016 &copy; <a href="{{route('principal.inicio')}}" target="_blank">Assistsalud</a>
				</div>
			</div>
		</footer>
	</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('static/vendedor/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/vendedor/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/vendedor/js/material.min.js')}}"></script>
<script src="{{asset('static/js/sweetalert.js')}}" type="text/javascript"></script>

<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
<script src="{{asset('static/vendedor/js/jquery.dropdown.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->

<script src="{{asset('static/vendedor/js/material-kit.js')}}" type="text/javascript"></script>

@yield('js')

</html>
