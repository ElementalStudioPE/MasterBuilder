@extends('layouts.master')

@section('content')

<!-- Section - Carousel -->
<div class="cd-section" id="">
    <div class="header-filter clear-filter banner-blue" data-parallax="active" style="background-image: url({{asset('static/img/banner-beneficios.jpg')}}); background-size: cover;background-position: 50% 50%;min-height: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <br><br><br>
                        <h3 class="title"><br><br></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Section - Carousel -->


<!-- Section - Como Funciona-->
<div class="cd-section" id="como-funciona" style="background-color: #ffffff;">
    <div class="container">
        <div class="features-1">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="title">Nuestros Beneficios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/medico.png')}}" alt="" class="cober">
                        <h4 class="info-title">Consultas médicas a tarifas preferenciales</h4>
                        <p>Hemos negociado tarifas hasta con 30% de descuento en los mejores centros médicos para que puedas atenderte con total tranquilidad.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/precio-icono.png')}}" alt="" class="cober">
                        <h4 class="info-title">Exámenes médicos hasta con 30% de descuento</h4>
                        <p>Nuestra alianza con CIMEDIC te permite tener un diagnostico de imágenes con la más alta tecnología y al mejor precio. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/precio-icono.png')}}" alt="" class="cober">
                        <h4 class="info-title">Medicamentos hasta con 30% de descuento</h4>
                        <p>En nuestra farmacia ASSIST SALUD, podrás elegir entre una amplia gama de medicamentos desde la comodidad de tu hogar.  </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/medico-domicilio.png')}}" alt="" class="cober">
                        <h4 class="info-title">Médico y Enfermera en el lugar donde estés</h4>
                        <p>Llevamos al médico y enferma a tu domicilio. Contamos con los mejores profesionales de la salud para rápido diagnóstico.<br>Nuestra alianza con Mi Enfermera te brinda a las mejores profesionales en el cuidado de ancianos y enfermos.</p>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/beneficios.png')}}" alt="" class="cober">
                        <h4 class="info-title">Informe detallado online de todas las atenciones</h4>
                        <p>¿Prefieres pagar por las atenciones de tus familiares? No te preocupes, assist salud te acompaña en todo el proceso: presupuesto inicial, modificaciones y finalmente que tu familiar sea atendido.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/pago-online.png')}}" alt="" class="cober">
                        <h4 class="info-title">Pago online de todas las atenciones</h4>
                        <p>Te damos la posibilidad de pagar vía web por tu atención y las de tus familiares, sólo deberás avisarnos en dónde desean atenderce y generar el pago.</p>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/medico-auditor.png')}}" alt="" class="cober">
                        <h4 class="info-title">Médico Auditor ASSIST SALUD</h4>
                        <p>Ponemos a tu disposición a nuestros médicos auditores para que garanticen transparencia en los gastos de los tratamientos e intervenciones médicas. Será tu mejor aliado, al momento de necesitar esa segunda opinión.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info">
                        <img src="{{asset('static/img/atencion.svg')}}" alt="" class="cober">
                        <h4 class="info-title">Atención personalizada de citas y presupuestos</h4>
                        <p>Nuestro objetivo es brindarte la mejor atención, por ello nos encargamos de gestionar tu cita y cotizar el presupuesto de cualquier procedimiento que necesites.</p>
                    </div>
                </div>
                </div>
                <br><br><br>
        </div>
    </div>
</div>
<!-- Fin Section - Como Funciona -->


@stop

@section('css')
<style type="text/css">
    .banner-blue:after{
        background: rgba(43, 148, 210, 0.27);
    }
    .info p{
        text-align: justify;
    }
</style>
@stop