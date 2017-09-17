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
                    <h1 class="title">Nuestra red de instituciones</h1>
                </div>
                <div class="col-md-10 col-md-offset-1">
                	<h4>Nuestros clientes podrán atenderse dentro de la mejor red de clínicas y centros médicos especializados.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.clinicalaluz.com.pe/" target="_blank">
                                    <img src="{{asset('static/img/red/1.jpg')}}" class="img-red grayscale">
                                </a>
                        <h4 class="info-title">Clínica La Luz</h4>
                        <p>Clínica la Luz pone a tu disposición más de 25 especialidades médicas con profesionales altamente calificados.  La clínica cuenta con una infraestructura moderna, con tecnología orientada a brindar un cuidado especializado de los pacientes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.clinicalimatambo.com/" target="_blank">
                                    <img src="{{asset('static/img/red/2.jpg')}}" class="img-red grayscale">
                                </a>
                        <h4 class="info-title">Clínica Limatambo</h4>
                        <p>Clínica Limatambo tiene  más de 20 años cuidando la salud de los peruanos y están comprometidos a brindarles la mejor experiencia en salud.  La clínica pone a tu disposición todas las especialidades médicas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.cimedic.com/" target="_blank">
                                <img src="{{asset('static/img/red/10.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Centro de Imágenes CIMEDIC</h4>
                        <p>Te brinda la confianza de un buen resultado, porque sabemos lo importante que es tener un apoyo para el diagnóstico CIMEDIC te brinda más de 20 tipos de exámenes médicos: resonancia magnética, mamografía, tomografía, radiología, endoscopía, y muchas más.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.neurologiaeskenazi.com/" target="_blank">
                                <img src="{{asset('static/img/red/4.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Instituto Neurológico Eskenazi</h4>
                        <p><br>El instituto Eskenazi tiene como objetivo educar, prevenir y tratar toda clase de enfermedades neurológicas. Con el respaldo de la clínica ricardo palma, es considerado uno de los mejores centros de neurología del país. Tiene en su staff  a reconocidos especialistas como el Dr. Jaime Eskenazi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.oncologiaricardopalma.com/" target="_blank">
                                <img src="{{asset('static/img/red/9.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Instituto de Oncología y Radioterapia Clínica Ricardo Palma</h4>
                        <p>Su principal filosofía es brindar una atención franca y honesta, con especial cuidado para mejorar la calidad de vida del paciente. Ofrece una atención integral en el diagnóstico y tratamiento del cáncer, respaldada por 12 años de experiencia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.iporperu.net/" target="_blank">
                                <img src="{{asset('static/img/red/7.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Instituto Peruano de Oncología & Radioterapia</h4>
                        <p>Liderado por renombrados especialistas en el campo de la oncología médica y reconocido a nivel mundial. En la actualidad, IPOR es un centro de referencia y de excelencia para el tratamiento del cáncer en España y en Europa.</p>
                    </div>
                </div>

            </div>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.uronorchiclayo.com/" target="_blank">
                                <img src="{{asset('static/img/red/8.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Centro Urológico URONOR</h4>
                        <p>Centro médico especializado líder en la prevención, diagnóstico, tratamiento y seguimiento de patologías urológicas. Cuenta con una infraestructura moderna y con tecnología avanzada para procedimientos médicos y quirúrgicos.  Ubicado en la mejor zona de Chiclayo.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.mvdentalgroup.pe/" target="_blank">
                                <img src="{{asset('static/img/red/5.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">MV Dental Group</h4>
                        <p>Consultorio odontológico privado con más de 30 años de experiencia especializados en odontología de niños, adulto y adulto mayor. Especialistas en periodoncia e implantes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://dentalcorin.com/" target="_blank">
                                <img src="{{asset('static/img/red/6.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Dental Corin</h4>
                        <p>Más de 10 años brindando servicios odontológicos de calidad  con la más alta tecnología y los mejores precios de  Lima Norte.</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.mienfermeraperu.com/" target="_blank">
                                <img src="{{asset('static/img/red/11.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Mi Enfermera</h4>
                        <p>Con 7 años de experiencia te ofrece atención y cuidado personalizado con los mejores profesionales de la salud. Te brinda enfermeras especializadas en cuidado de enfermos y ancianos, además de venta de productos clínicos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                            <a href="http://www.clinicadeojos.com.pe/es.html" target="_blank">
                                <img src="{{asset('static/img/red/3.jpg')}}" class="img-red grayscale">
                            </a>
                        <h4 class="info-title">Oftalmic Laser</h4>
                        <p>Con más de 20 años de experiencia, la clínica es pionera en los Olivos y en Lima Norte en ofrecer tecnología de punta y un staff médico con amplia experiencia para la detección y un eficaz tratamiento de las enfermedades visuales: miopía, hipermetropía, astigmatismo, etc.</p>
                    </div>
                </div>
            </div>

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