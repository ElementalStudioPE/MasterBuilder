
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Masterstars</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="">
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('static-app/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('static-app/css/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('static-app/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>

<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('principal.inicio')}}">Masterstars</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="{{route('principal.inicio')}}">
                            <i class="material-icons">home</i> Inicio
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('session.ingresar')}}">
                            <i class="material-icons">fingerprint</i> Ingresar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="http://i-cdn.phonearena.com/images/reviews/187602-image/Apple-iPad-Pro-Review-007.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            {{ Form::open(array('action'=>'PrincipalController@login', 'class' => '')) }}
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="rose">
                                        <h4 class="card-title">Login</h4>
                                        <!-- <div class="social-line">
                                            <a href="#btn" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#eugen" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                    <!-- <p class="category text-center">
                                        Or Be Classical
                                    </p> -->
                                    <div class="card-content">
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input name="email" type="email" class="form-control" required="true">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input name="password" type="password" class="form-control" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-rose btn-primary">Ingresar</button>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; 2017 <a href="#">Masterstars</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
</body>
<!--   Core JS Files   -->
<script src="{{asset('static-app/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static-app/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static-app/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static-app/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static-app/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('static-app/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('static-app/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('static-app/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('static-app/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('static-app/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('static-app/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('static-app/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('static-app/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('static-app/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="{{asset('static-app/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('static-app/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('static-app/js/sweetalert2.js')}}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('static-app/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('static-app/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('static-app/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('static-app/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('static-app/js/demo.js')}}"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>