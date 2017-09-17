<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Assist Salud</title>
    <meta name="description" content="Hemos diseñado el mejor programa de salud para ti y tu familia. Podrás hacer el pago por tus atenciones y las de tus familiares con total seguridad." />

    <base href="https://www.assistsalud.com/" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Assist Salud">
    <meta itemprop="description" content="Hemos diseñado el mejor programa de salud para ti y tu familia. Podrás hacer el pago por tus atenciones y las de tus familiares con total seguridad.">
    <meta itemprop="image" content="{{asset('static/img/Parents-with-baby-and-mother-with-cell-phone.jpg')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="Assist Salud - Tranquilidad y confianza a un click de distancia">
    <meta name="twitter:description" content="Hemos diseñado el mejor programa de salud para ti y tu familia. Podrás hacer el pago por tus atenciones y las de tus familiares con total seguridad.">
    <meta name="twitter:image:src" content="{{asset('static/img/Parents-with-baby-and-mother-with-cell-phone.jpg')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Assist Salud - Tranquilidad y confianza a un click de distancia"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://assistsalud.com/" />
    <meta property="og:image" content="{{asset('static/img/Parents-with-baby-and-mother-with-cell-phone.jpg')}}" />
    <meta property="og:description" content="Hemos diseñado el mejor programa de salud para ti y tu familia. Podrás hacer el pago por tus atenciones y las de tus familiares con total seguridad." />
    <meta property="og:site_name" content="Assist Salud" />

    <meta name="_token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- <link rel="stylesheet" href="{{asset('static/font-awesome-4.6.3/css/font-awesome.min.css')}}" /> -->
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/material-kit.css">
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://assistsalud.com/static/css/animate.css">

<!--     <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('static/css/material-kit.css')}}" rel="stylesheet"/>
    <link href="{{asset('static/css/custom.css')}}" rel="stylesheet"/>
    <link href="{{asset('static/css/sweetalert.css')}}" rel="stylesheet"/>
    <link href="{{asset('static/css/animate.css')}}" rel="stylesheet"/> -->
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

<body class="section-white">
    <div class="section-space"></div>
    <div class="cd-section" id="">
        <div class="header-3">
            @include('layouts.nav')
        </div>
    </div>
    @yield('content')

    @include('layouts.footer')

</body>
<!--   Core JS Files   -->
<script src="https://assistsalud.com/static/js/jquery.min.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/bootstrap.min.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/material.min.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/nouislider.min.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/bootstrap-datepicker.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/jquery.dropdown.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/jquery.tagsinput.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/jasny-bootstrap.min.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/js/material-kit.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/assets-for-demo/modernizr.js"  type="text/javascript"></script>
<script src="https://assistsalud.com/static/assets-for-demo/vertical-nav.js"  type="text/javascript"></script>

<!-- <script src="{{asset('static/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/js/material.min.js')}}"></script> -->

<!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<!-- <script src="{{asset('static/js/nouislider.min.js')}}" type="text/javascript"></script> -->

<!--    Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<!-- <script src="{{asset('static/js/bootstrap-datepicker.js')}}" type="text/javascript"></script> -->

<!--    Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
<!-- <script src="{{asset('static/js/jquery.dropdown.js')}}" type="text/javascript"></script> -->

<!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<!-- <script src="{{asset('static/js/jquery.tagsinput.js')}}"></script> -->

<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<!-- <script src="{{asset('static/js/jasny-bootstrap.min.js')}}"></script> -->

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<!-- <script src="{{asset('static/js/material-kit.js')}}" type="text/javascript"></script> -->

<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
<!-- <script src="{{asset('static/assets-for-demo/modernizr.js')}}" type="text/javascript"></script>
    <script src="{{asset('static/assets-for-demo/vertical-nav.js')}}" type="text/javascript"></script> -->

    <!-- Sweet Alert -->
    <script src="https://assistsalud.com/static/js/sweetalert.js"  type="text/javascript"></script>
    <script src="https://assistsalud.com/static/js/wow.min.js"  type="text/javascript"></script>
<!-- <script src="{{asset('static/js/sweetalert.js')}}" type="text/javascript"></script>
    <script src="{{asset('static/js/wow.min.js')}}" type="text/javascript"></script> -->

    <script>

    $(document).ready(function(){
     wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       false,       // default
    live:         true        // default
    }
                    )
    wow.init();
    });

 </script>


 <script type="text/javascript">
    $(function () {
        $(".showpassword-nav").each(function (index, input) {
            var $input = $(input);
            $(".show-pass-nav").click(function (e) {
                e.preventDefault();
                var change = "";
                if ($(this).html() === "MOSTRAR") {
                    $(this).html("OCULTAR")
                    change = "text";
                } else {
                    $(this).html("MOSTRAR");
                    change = "password";
                }
                var rep = $("<input type='" + change + "' />")
                .attr("id", $input.attr("id"))
                .attr("name", $input.attr("name"))
                .attr('class', $input.attr('class'))
                .val($input.val())
                .insertBefore($input);
                $input.remove();
                $input = rep;
            }).insertAfter($input);
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".modal-showpassword-nav").each(function (index, input) {
            var $input = $(input);
            $(".modal-show-pass-nav").click(function (e) {
                e.preventDefault();
                var change = "";
                if ($(this).html() === "MOSTRAR") {
                    $(this).html("OCULTAR")
                    change = "text";
                } else {
                    $(this).html("MOSTRAR");
                    change = "password";
                }
                var rep = $("<input type='" + change + "' />")
                .attr("id", $input.attr("id"))
                .attr("name", $input.attr("name"))
                .attr('class', $input.attr('class'))
                .val($input.val())
                .insertBefore($input);
                $input.remove();
                $input = rep;
            }).insertAfter($input);
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(".showpassword-register").each(function (index, input) {
            var $input = $(input);
            $(".show-pass-register").click(function (e) {
                e.preventDefault();
                var change = "";
                if ($(this).html() === "MOSTRAR") {
                    $(this).html("OCULTAR")
                    change = "text";
                } else {
                    $(this).html("MOSTRAR");
                    change = "password";
                }
                var rep = $("<input type='" + change + "' />")
                .attr("id", $input.attr("id"))
                .attr("name", $input.attr("name"))
                .attr('class', $input.attr('class'))
                .val($input.val())
                .insertBefore($input);
                $input.remove();
                $input = rep;
            }).insertAfter($input);
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(e){
        $('#initLogin').click(function(e){
            e.preventDefault();
            if ( $('#login-email').val() == '' ) {
                swal("¡Falta el correo!");
                return false;
            }
            if ( $('#login-password').val() == '' ) {
                swal("¡Falta la contraseña!");
                return false;
            }

            login_url = "{{route('session.login')}}";

            $.ajax({
                type : 'post',
                // headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#login-email').val(), password: $('#login-password').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'No existe un usuario con ese correo', "error");
                    }
                    if (responseText == 'error-password') {
                        swal('Error de ingreso', 'La contraseña es incorrecta', "error");
                    }
                    if (responseText == 'exito') {
                        window.location.href = "{{route('session.login.flg')}}";
                    }
                }
            });
            return false;
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function(e){
        $('#modal-initLogin').click(function(e){
            e.preventDefault();
            if ( $('#modal-login-email').val() == '' ) {
                swal("¡Falta el correo!");
                return false;
            }
            if ( $('#modal-login-password').val() == '' ) {
                swal("¡Falta la contraseña!");
                return false;
            }

            login_url = "{{route('session.login')}}";

            $('.gif-login-modal').show();

            $.ajax({
                type : 'post',
                // headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#modal-login-email').val(), password: $('#modal-login-password').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'No existe un usuario con ese correo', "error");
                    }
                    if (responseText == 'error-password') {
                        swal('Error de ingreso', 'La contraseña es incorrecta', "error");
                    }
                    if (responseText == 'exito') {
                        window.location.href = "{{route('session.login.flg')}}";
                        $('.gif-login-modal').hide();
                    }
                }
            });
            return false;
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function(e){
        $('#initRegister').click(function(e){
            e.preventDefault();
            if ( $('#register-nombres').val() == '' ) {
                swal("¡El nombre es obligatorio!");
                return false;
            }
            if ( $('#register-ap_paterno').val() == '' ) {
                swal("¡El apellido paterno es obligatorio!");
                return false;
            }
            if ( $('#register-email').val() == '' ) {
                swal("¡El correo electrónico es obligatorio!");
                return false;
            }
            if ( $('#register-password').val() == '' ) {
                swal("¡La contraseña es obligatoria!");
                return false;
            }

            login_url = "{{route('session.register')}}";

            $('.gif-register').show();

            $.ajax({
                type : 'post',
                // headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#register-email').val(), password: $('#register-password').val(), nombres: $('#register-nombres').val(), ap_paterno: $('#register-ap_paterno').val(), ap_materno: $('#register-ap_materno').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-nombres') {
                        swal('Error de ingreso', 'El nombre es obligatorio', "error");
                    }
                    if (responseText == 'error-ap_paterno') {
                        swal('Error de ingreso', 'El apellido paterno es obligatorio', "error");
                    }
                    if (responseText == 'error-email-existe') {
                        swal('Error de ingreso', 'Ya existe un usuario con el mismo correo', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'El correo es obligatorio', "error");
                    }
                    if (responseText == 'error-password') {
                        swal('Error de ingreso', 'La contraseña es obligatoria', "error");
                    }
                    if (responseText == 'exito') {
                        window.location.href = "{{route('session.login.flg')}}";
                    }
                    $('.gif-register').hide();
                }
            });
            return false;
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(e){
        $('#olvideClaveButton').click(function(e){
            e.preventDefault();
            if ( $('#email-olvide-pass').val() == '' ) {
                swal("¡El correo electrónico es obligatorio!");
                return false;
            }

            login_url = "{{route('session.olvide.contrasena')}}";

            $('.gif-olvide-pass').show();

            $.ajax({
                type : 'post',
                // headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#email-olvide-pass').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error-email-no-existe') {
                        swal('Error de ingreso', 'No existe un usuario con el mismo correo', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'El correo es obligatorio', "error");
                    }
                    if (responseText == 'exito') {
                        swal('Todo OK', 'Se ha enviado un correo para recuperar tu contraseña', "success");
                    }
                    $('.gif-olvide-pass').hide();
                }
            });
            return false;
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#login-email').keypress(function (e) {
          if (e.which == 13) {
            $('#initLogin').click();
            return false;
        }
    })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#login-password').keypress(function (e) {
          if (e.which == 13) {
            $('#initLogin').click();
            return false;
        }
    })
    });
</script>
@yield('js')

</html>
