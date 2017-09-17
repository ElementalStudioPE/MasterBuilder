@extends('layouts.master')

@section('content')

<!-- Section - Como Funciona-->
<div class="cd-section" id="como-funciona" style="background-color: #ececec;">
    <div class="container">
        <div class="features-1">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="title">Verifica tu correo</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 col-md-push-2">
                    <h2 class="text-left">Hola {{ Auth::user()->usuario_nombres }}</h2>
                    <h3 class="description" style="text-align: justify;">
                        Te hemos enviado un correo de verificación.
                    </h3>
                </div>

                <div class="col-md-8 col-md-push-2 text-left">
                    <br><br><br><br>
                    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editEmail" >¿No encuentras el correo?</a>
                    <!-- <h3 class="text-left">¿No encuentras el correo?</h3>
                    <h4 class="description" style="text-align: justify;">
                        Revisa la carpeta de correos no deseados o dale click abajo para volver a enviar.
                    </h4> -->
                </div>

                <!-- <div class="col-md-8 col-md-push-2 hide">
                    <div class="row card card-raised card-form-horizontal" style="background: white;">
                        {{ Form::open(array('action' => 'ActivacionController@resend_email')) }}
                        <br>
                        <div class="col-md-12 col-sm-12">
                            <input type="email" name="email" class="form-control" id="emailEspera" value="{{Auth::user()->email}}" style="font-size: 20px;">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="" class="btn btn-primary" id="resend-email" style="width: 100%;">¡Volver a enviar!</a>
                        </div>
                        <div class="col-md-12" style="position: relative;">
                            <img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;">
                            <br>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Como Funciona -->




@stop

@section('css')
<style type="text/css">
    .navbar-fixed-bottom,
    .navbar-fixed-top{
        position: absolute !important;
        top: 0;
        left: 0;
        width: 100%;
    }
    #sectionsNavEspera{
        display: block !important;
    }
    #sectionsNavEspera{
        box-shadow: inherit !important;
    }
    #sectionsNav{
        display: none !important;
    }
    .gif-register {
        position: relative !important;
        width: 40px !important;
        margin-bottom: 12px !important;
    }
</style>
@stop


@section('js')
<div class="modal fade" id="editEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h3 class="title-info modal-title text-center" style="font-weight: bold;">Volver a enviar</h3>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'ActivacionController@resend_email')) }}
                <div class="content-sign-in row">
                    <div class="col-md-12 col-sm-12">
                        <input type="email" name="email" class="form-control" id="emailEspera" value="{{Auth::user()->email}}" style="font-size: 20px;">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <a href="" class="btn btn-primary btn-lg" id="resend-email" style="width: 100%;">¡Enviar!</a>
                    </div>
                    <div class="col-md-12" style="position: relative;">
                        <img src="https://www.futurequestisland.org/images/app/preloader.gif" class="gif-register" style="display: none;">
                    </div>
                </div>
                <!-- <div class="footer text-center" style="padding: 0px 30px 10px 20px;">
                    <button type="submit" class="btn btn-primary btn-wd" style="width: 100%;" id="modal-initLogin">Ingresa a tu cuenta</button>
                </div> -->
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(e){
        $('#resend-email').click(function(e){
            e.preventDefault();

            if ( $('#emailEspera').val() == '' ) {
                swal("¡El email es obligatorio!");
                return false;
            }

            login_url = "{{route('activacion.resend.email')}}";

            $('.gif-register').show();

            $.ajax({
                type : 'post',
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: { email: $('#emailEspera').val() },
                url  : login_url,
                success: function(responseText){
                    swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de envío', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'activado') {
                        swal('Error de envío', 'Tu cuenta se encuentra activa', "error");
                        window.location.href = "{{route('suscripcion.plan')}}";
                    }
                    if (responseText == 'error-existe-email') {
                        swal('Error de envío', 'Ya existe un usuario con el mismo correo', "error");
                    }
                    if (responseText == 'exito') {
                        swal('Todo salió OK', 'Correo enviado con éxito', "success");
                    }
                    $('.gif-register').hide();
                }
            });
            return false;
        })
    });
</script>
@stop