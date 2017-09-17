@extends('layouts.master')

@section('content')

<!-- Section - Carousel -->
<div class="cd-section" id="">
    <div class="header-3">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="page-header header-filter" style="background-image: url({{asset('static/img/Parents-with-baby-and-mother-with-cell-phone.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 text-left">
                                        <h1 class="title">Programa de salud</h1>
                                        <h3>Hemos diseñado el mejor programa de salud para ti y tu familia.</h3>
                                        <br />
                                        <div class="buttons headerNavigationItems">
                                            <a href="#beneficios" class="btn btn-primary btn-lg">
                                                Saber más
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="page-header header-filter" style="background-image: url({{asset('static/img/ProductLine_1_Header.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 text-left">
                                        <h1 class="title">Facilidad de pago online</h1>
                                        <h3>Podrás hacer el pago por tus atenciones y las de tus familiares con total seguridad.</h3>
                                        <br />
                                        <div class="buttons headerNavigationItems">
                                            <a href="#beneficios" class="btn btn-primary btn-lg">
                                                Saber más
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Carousel -->


<!-- Section - Cobertura -->
<div class="cd-section" id="cobertura" >
    <div class="container span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;">
        <div class="features-1">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <h2 class="title">Nuestra red de instituciones</h2>
                    <h5 class="description">Ponemos a disposición de tu familia nuestra red conformada por las mejores clínicas y centros médicos especializados del país.</h5><br><br>
                </div>
            </div>
            <div class="row logos">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/1.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/2.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/3.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/4.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/5.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/6.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
            <div class="row logos">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/7.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/8.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/9.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/10.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/11.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="info-custom">
                        <img src="https://assistsalud.com/static/img/12.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <br><br>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="info-custom text-center">
                        <a href="{{route('principal.cobertura')}}" class="btn btn-primary"> Ver más<div class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Cobertura -->

<!-- Section - Como Funciona-->
<div class="cd-section" id="como-funciona" style="background-color: #ececec;">
    <div class="container">
        <div class="features-1 span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="title">¿Cómo funciona?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info" style="padding-top: 20px !important;">
                        <div class="icon icon-primary">
                            <img src="{{asset('static/img/identificacion.png')}}" class="img-responsive" style="margin: 0 auto !important;max-width: 100px;">
                        </div>
                        <h4 class="info-title">Regístrate</h4>
                        <h5 class="description" style="text-align: justify;">Crea una cuenta usando tu correo o tu cuenta de Google.</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding-top: 20px !important;">
                        <div class="icon icon-primary">
                            <img src="{{asset('static/img/plan.png')}}" class="img-responsive" style="margin: 0 auto !important;max-width: 100px;">
                        </div>
                        <h4 class="info-title">Elige tu plan</h4>
                        <h5 class="description" style="text-align: justify;">Podrás elegir el plan acorde a tus necesidades desde $29.90 anual.</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding-top: 20px !important;">
                        <div class="icon icon-primary">
                            <img src="{{asset('static/img/familia.png')}}" class="img-responsive" style="margin: 0 auto !important;max-width: 100px;">
                        </div>
                        <h4 class="info-title">Afilia a tus familiares</h4>
                        <h5 class="description" style="text-align: justify;">Si elegiste el plan familiar, no olvides de agregar a tus beneficiarios.</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding-top: 20px !important;">
                        <div class="icon icon-primary">
                            <img src="{{asset('static/img/pago-online.png')}}" class="img-responsive" style="margin: 0 auto !important;max-width: 100px;">
                        </div>
                        <h4 class="info-title">Separa tu cita</h4>
                        <h5 class="description" style="text-align: justify;">Si deseas nosotros separamos tu cita y el día de la atención solo deberás identificarte con tu DNI como paciente Assist Salud.</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg">¡Comienza con los beneficios!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Como Funciona -->

<!-- Section - Beneficios -->
<div class="cd-section" id="beneficios">
    <div class="projects-4" id="projects-4" style="/**padding-bottom: 0 !important;*/">
        <div class="container">
            <div class="row span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;"">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">Asegurar la salud de tu familia es fácil</h2>
                    <h5 class="description">Todo lo que puedes querer en un programa de salud.</h5>
                    <div class="section-space"></div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-5 col-md-offset-1 span3 wow bounceInLeft" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInLeft;">
                    <div>
                        <img src="{{asset('static/img/ipad-iphone-ios7.png')}}" class="img-responsive" alt="Awesome Image" style="max-width: 320px;margin: 0 auto;">
                    </div>
                </div>
                <div class="col-md-5 span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;">
                    <div class="info info-horizontal">
                        <div class="description">
                            <h3 class="info-title">Programa integral de salud</h3>
                            <h5 class="description">
                                Que tú y tu familia accedan a las mejores tarifas por servicios médicos.
                            </h5>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">local_offer</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title" style="color: #00bcd4;">Consultas a tarifas preferenciales</h4>
                            <p class="description">
                                No te preocupes por comparar precios. Tenemos las mejores tarifas del mercado.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title" style="color: #00bcd4;">Descuentos en medicamentos y exámenes médicos</h4>
                            <p class="description">
                                No pagues más por tus medicamentos o exámenes.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                    <br>
                    <a href="{{route('principal.beneficios')}}" class="btn btn-info">Ver más beneficios</a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-5 col-md-offset-1 span3 wow bounceInLeft" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInLeft;">
                    <div class="info info-horizontal">
                        <div class="description">
                            <h3 class="info-title">Pago y detalle online de tus atenciones</h3>
                            <h5 class="description">
                                Paga tus cuentas y las de tus familiares de forma online.
                            </h5>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title" style="color: #00bcd4;">Sin recargos extras</h4>
                            <p class="description">
                                Sólo pagarás por el servicio que tú o tus familiares reciban.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">list</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title" style="color: #00bcd4;">Seguimiento de tratamientos</h4>
                            <p class="description">
                                Informe detallado online de todas las atenciones médicas.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                    <br>
                    <a href="{{route('principal.beneficios')}}" class="btn btn-info">Ver más beneficios</a>
                    </div>
                </div>
                <div class="col-md-5 span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;">
                    <div class="">
                        <img src="{{asset('static/img/coupon-app.png')}}" class="img-responsive" style="max-width: 320px;margin: 0 auto;bottom: -80px;position: relative;">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Beneficios -->


<!-- Section - Precio -->
<div class="cd-section" id="pricing">
    <div class="pricing-3" id="pricing-3" style="background-color: #ececec;">
        <div class="container span3 wow bounceInRight" style="visibility: visible; animation-duration: 1.2s; animation-name: bounceInRight;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title text-center">Mejores tarifas en servicios de salud</h2><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="description tarifario-home">
                        <div class="table-default">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Servicio</th>
                                        <th class="text-right">Beneficio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <p>Consulta neurológica<br><strong>Instituto ESKENAZI</strong><br></p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <p class="">Antes:<br> <span class="precio-line-through">S/ 300.00</span></p>
                                            <p class="">Ahora:<br> <span class="">S/ 200.00</span></p>
                                            Ahorro
                                            <button type="button" rel="tooltip" class="btn btn-info btn-lg" data-original-title="" title="">
                                                S/ 100.00
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Ecografías<br><strong>Centro URONOR</strong></td>
                                        <td class="td-actions text-right">
                                            <p class="">Antes:<br> <span class="precio-line-through">S/ 160.00</span></p>
                                            <p class="">Ahora:<br> <span class="">S/ 140.00</span></p>
                                            Ahorro
                                            <button type="button" rel="tooltip" class="btn btn-info btn-lg" data-original-title="" title="">
                                                S/ 20.00
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Blanqueamiento dental<br><strong>Dental CORIN</strong></td>
                                        <td class="td-actions text-right">
                                            <p class="">Antes:<br> <span class="precio-line-through">S/ 800.00</span></p>
                                            <p class="">Ahora:<br> <span class="">S/ 600.00</span></p>
                                            Ahorro
                                            <button type="button" rel="tooltip" class="btn btn-info btn-lg" data-original-title="" title="">
                                                S/ 200.00
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--  -->
                    <div class="section-space"></div>
                </div>

                
                <div class="col-md-4">
                    <div class="card card-pricing card-raised">
                        <div class="content content-primary">
                            <h6 class="category text-info">Familiar</h6>
                            <h1 class="card-title"><small>$</small>59.90<small>/año</small></h1>
                            <ul>
                                <li>Inscribe a<br><b>4 familiares</b></li>
                                <li>Sigue el tratamiento de<br><b>tus beneficiarios</b></li>
                                <li>Administra tu<br><b>historial de pagos</b></li>
                                <li>Accede a las mejores <br><b>tarifas en nuestra red de instituciones</b></li>
                            </ul>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-white btn-round">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-pricing card-raised">
                        <div class="content content-primary">
                            <h6 class="category text-info">Personal</h6>
                            <h1 class="card-title"><small>$</small>29.90<small>/año</small></h1>
                            <ul>
                                <li>Programa<br><b>personal</b></li>
                                <li>Administra tu<br><b>historial de pagos</b></li>
                                <li>Accede a las mejores <br><b>tarifas en los centros médicos</b></li>
                            </ul>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-white btn-round">
                                Comenzar ahora
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Precio -->



@stop