@extends('cuenta.layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow: inherit !important; background: inherit !important;">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Historial de Pagos</h4>
                        <p class="category" style="color: #fff;font-size: 15px;">Registro de pagos realizados</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 0 !important;">
          <div class="card-content">
            <!-- Table redesign -->
            <div class="div-table">

              @foreach( DB::table('vsalud_garantia')->where('usuario_codigo','=',Auth::user()->id)->where('flg_pago','1')->get() as $vsalud_garantia )
              <?php
              if($vsalud_garantia->flgestado == 'AUDITADO'){
                  $estado = 'AUDITADO';
                  $color_estado = 'btn-success';
              }
              elseif($vsalud_garantia->flgestado == 'PENDIENTE'){
                  $estado = 'PENDIENTE';
                  $color_estado = 'btn-warning';
              }
              elseif($vsalud_garantia->flgestado == 'OBSERVADO'){
                  $estado = 'OBSERVADO';
                  $color_estado = 'btn-danger';
              }
              elseif($vsalud_garantia->flgestado == 'PAGADO'){
                  $estado = 'PAGADO';
                  $color_estado = 'btn-success';
              }
              ?>
              <div class="row registro-in" id="registro-in-{{$vsalud_garantia->c_documento}}">
                <div class="row registro-header" style="margin: 0 !important;" data-identificador="{{$vsalud_garantia->c_documento}}">
                  <div class="col-sm-1 col-xs-2">
                      <span class="btn btn-just-icon btn-round registro-in-icon {{$color_estado}}">
                        <!-- <i class="material-icons" style="margin-left: -6px;margin-top: -12px;font-size: 19px;">featured_play_list</i> -->
                        <i class="material-icons" style="margin-left: -6px;margin-top: -12px;font-size: 19px;">payment</i>
                    </span>
                </div>
                <div class="col-sm-6 col-xs-10">
                  <p class="text-table">{{$vsalud_garantia->paciente}}</p>
              </div>
              <div class="col-sm-3 col-xs-12 clinica-nombre">
                  <p class="text-table">{{$vsalud_garantia->clinica_nombre}}</p>
              </div>
              <div class="col-sm-2 col-xs-12">
                  <p class="text-table text-right">{{ date('Y-m-d', strtotime($vsalud_garantia->d_documento)) }}</p>
              </div>
          </div>
          <div class="progress-line" id="progress-{{$vsalud_garantia->c_documento}}"></div>
          <div class="inbox-contenido" id="inbox-{{$vsalud_garantia->c_documento}}">
              <div class="row" style="margin: 5px 10px !important;">
                <div class="col-sm-4">
                  <h5 class="margin-bottom-0"><strong>Número de consulta</strong></h5>
                  <h5 class="h5-texto-regular">{{$vsalud_garantia->c_documento}}</h5>
              </div>
              <div class="col-sm-3">
                  <h5 class="margin-bottom-0"><strong>Fecha</strong></h5>
                  <h5 class="h5-texto-regular">{{ date('Y-m-d', strtotime($vsalud_garantia->d_documento)) }}</h5>
              </div>
              <div class="col-sm-5">
                  <h5 class="margin-bottom-0"><strong>Clínica</strong></h5>
                  <h5 class="h5-texto-regular">{{$vsalud_garantia->clinica_nombre}}</h5>
              </div>
              <div class="col-xs-12">
                <hr style="margin: 0 !important;">
            </div>
            <div class="col-sm-4">
              <h5 class="margin-bottom-0"><strong>Paciente</strong></h5>
              <h5 class="h5-texto-regular">{{$vsalud_garantia->paciente}}</h5>
          </div>
          <div class="col-sm-3">
              <h5 class="margin-bottom-0"><strong>Tipo de Servicio</strong></h5>
              <h5 class="h5-texto-regular">{{$vsalud_garantia->servicio_nombre}}</h5>
          </div>
          <div class="col-sm-5">
              <h5 class="margin-bottom-0"><strong>Especialidad</strong></h5>
              <h5 class="h5-texto-regular">{{$vsalud_garantia->especialidad_nombre}}</h5>
          </div>
          <div class="col-xs-12">
            <hr style="margin: 0 !important;">
        </div>
        <div class="col-sm-6">
          <h5 class="margin-bottom-0"><strong>Médico tratante</strong></h5>
          <h5 class="h5-texto-regular">{{$vsalud_garantia->c_medico_tratante}}</h5>
      </div>
      <div class="col-sm-6">
          <h5 class="margin-bottom-0"><strong>Diagnóstico</strong></h5>
          <h5 class="h5-texto-regular">{{$vsalud_garantia->diagnostico_nombre}}</h5>
      </div>
      <div class="col-xs-12">
        <hr style="margin: 0 !important;">
    </div>
    <div class="col-sm-12">
      <h5 class="margin-bottom-0"><strong>Informe médico</strong></h5>
      <h5 class="h5-texto-regular">{{$vsalud_garantia->c_informe_medico}}</h5>
  </div>
  <div class="col-xs-12">
    <hr style="margin: 0 !important;">
</div>
<!-- Servicios -->
<div class="col-md-4">
  <h5 class="margin-bottom-0"><strong>Servicio Brindado</strong></h5>
</div>
<div class="col-md-2">
  <h5 class="margin-bottom-0"><strong>Cant.</strong></h5>
</div>
<div class="col-md-3">
  <h5 class="margin-bottom-0"><strong>P. Unitario</strong></h5>
</div>
<div class="col-md-3">
  <h5 class="margin-bottom-0"><strong>Subtotal</strong></h5>
</div>
<?php $servicios = explode(",", $vsalud_garantia->c_servicio_medico); ?>

@foreach($servicios as $key)    
<?php $serv = explode("-", $key); ?>
@if( $serv[0]!='' )
<div class="col-lg-4 col-md-4 col-sm-4">
 <h5 class="h5-texto-regular margin-bottom-0">{{ $serv[0] }}</h5>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
 <h5 class="h5-texto-regular margin-bottom-0">{{ $serv[1] }}</h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-3">
 <h5 class="h5-texto-regular margin-bottom-0">{{ $serv[2] }}</h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-3">
 <h5 class="h5-texto-regular margin-bottom-0">{{ $serv[3] }}</h5>
</div>
@endif
@endforeach
<div class="col-lg-9 col-md-9 col-sm-9">
   <h5 style="margin-top: 0 !important;margin-bottom: 0 !important;" class="text-right"><strong style="font-size: 14px !important;">Total inc. IGV</strong></h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-3">
   <h5 class="h5-texto-regular margin-bottom-0">{{$vsalud_garantia->n_total}}</h5>
</div>
<!-- <button data-brindado="{{$vsalud_garantia->c_servicio_medico}}"> -->

<div class="col-xs-12">
    <hr style="margin: 0 !important;">
</div>
<div class="col-sm-12">
  <h5 class="margin-bottom-0">
      <strong style="color: #3C4858 !important;font-weight: bold !important;font-size: 14px !important;">Estado</strong> <a href="#"><span class="btn btn-primary btn-xs">PAGADO</span></a>
  </h5>
</div>
<!-- Fin - Servicios -->
</div>
</div>
</div>
@endforeach


</div>
<!-- End - Table redesign -->
</div>
</div>















<div class="row">
   <div class="col-md-12 text-right">
      <a href="{{route('cuenta.tracking')}}" class="btn btn-primary btn-md">Actualizar <i class="material-icons">update</i></a>
  </div>
</div>


</div>
</div>


@stop


@section('css')
<style type="text/css">
  .margin-bottom-0{
    margin-bottom: 0 !important;
}
h5.margin-bottom-0 strong{
  font-size: 15px !important;
  color: #2b94d2;
  font-weight: 500;
}
.div-table{
 display: table;
 width: 100%;
}
.div-table-row{
  display:table-row;
  width:auto;
  clear:both;
}
.registro-in .progress-line{
  display: none;
}
.registro-in .inbox-contenido{
  display: none;
}
.registro-in.registro-open .progress-line.progress-line-open{
  display: flex;
  margin-bottom: -1px !important;
}
.registro-in.registro-open .inbox-contenido.inbox-contenido-open{
  display: block;
  border-top: 1px solid #d8d8d8;
}
.registro-in.registro-open{
  width: 102%;
  margin-left: -1% !important;
  margin-bottom: 25px !important;
  margin-top: 25px !important;
  box-shadow: 0 0 6px rgba(0,0,0,.16),0 6px 12px rgba(0,0,0,.32);
  border-bottom: 1px solid rgba(255,255,255,0.01);
}
.registro-in{
  margin: 0 !important;
  float: left;
  border-bottom: 1px solid #d8d8d8;
  width: 96%;
  background: white;
  margin-left: 2% !important;
}
.registro-header{
  cursor: pointer;
}
.registro-in-icon{
  height: 32px;
  width: 32px;
}
.text-table{
  margin-top: 20px;
  font-size: 15px;
}
.progress-line,
.progress-line:before,
.progress-line:after {
  height: 3px;
  width: 100%;
  margin: 0;
}
.progress-line {
  background-color: #4caf50;
  display: -webkit-flex;
  display: flex;
}
.progress-line:before {
  background-color: #ff9800;
  content: '';
  -webkit-animation: running-progress 2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
  animation: running-progress 2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
.progress-line:after {
  background-color: #f44336;
  content: '';
  -webkit-animation: running-progress 2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
  animation: running-progress 2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
}
@-webkit-keyframes running-progress {
  0% { margin-left: 0px; margin-right: 100%; }
  50% { margin-left: 25%; margin-right: 0%; }
  100% { margin-left: 100%; margin-right: 0; }
}
@keyframes running-progress {
  0% { margin-left: 0px; margin-right: 100%; }
  50% { margin-left: 25%; margin-right: 0%; }
  100% { margin-left: 100%; margin-right: 0; }
}
.h5-texto-regular{
  margin-top: 0 !important;
  font-size: 15px !important;
}
.clinica-nombre p{
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
@stop


@section('js')



<div class="modal fade" id="facturaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="max-width: 420px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
      </button>
      <h3 class="title-info modal-title text-center" style="font-weight: bold;">¡Pago realizado con éxito!</h3>
  </div>
  <div class="modal-body">
    <form class="form">
      <div class="content-sign-up row" style="margin: 0 !important;">
        <div class="col-xs-12">
          <div class="form-group input-group-full label-floating">
            <label class="control-label">Número de pedido:</label>
            <p class="form-control" id="num_pedido" style="text-transform: uppercase;"></p>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="form-group input-group-full label-floating">
        <label class="control-label">Número de tarjeta</label>
        <p class="form-control" id="num_tarjeta" style="text-transform: uppercase;"></p>
    </div>
</div>
<div class="col-sm-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Tarjeta</label>
    <p class="form-control" id="marca_tarjeta" style="text-transform: uppercase;"></p>
</div>
</div>
<div class="col-sm-12 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Titular</label>
    <p class="form-control" id="titular" style="text-transform: uppercase;"></p>
</div>
</div>
<div class="col-xs-12">
  <br>
</div>
</div>
<div class="footer text-center" style="padding: 0px 15px 10px 15px;position: relative;">
    <a href="{{route('session.login.flg')}}" class="btn btn-success btn-wd" style="width: 100%;">Ir al panel</a>
</div>
</form>
</div>
</div>
</div>
</div>






<div class="modal fade" id="disablePagar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h3 class="title-info modal-title text-center" style="font-weight: bold;">¡Aún falta un paso!</h3>
            </div>
            <div class="modal-body">
                <form class="form">
                    <div class="content-sign-up row" style="margin: 0 !important;">
                        <div class="col-xs-12">
                            <h4 class="description">
                                <strong>Nuestro Auditor</strong> debe aprobar este procecimiento.
                            </h4>
                            <h5><strong>¿Qué hace un auditor</strong>?</h5>
                            <p>
                                Es tu mejor aliado al momento de necesitar esa segunda opinión frente a procedimientos médicos. Garantizan la transparencia en los gastos de tratamiento e intervenciones quirúrgicas.
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <br>
                        </div>
                    </div>
                    <div class="footer text-right" style="padding: 0px 30px 10px 30px;position: relative;">
                     <input type="submit" class="btn btn-primary btn-wd close" data-dismiss="modal" aria-hidden="true" style="width: 100%;max-width: 200px;" value="Cerrar">
                 </div>
                 <br>
                 <br>
             </form>
         </div>
     </div>
 </div>
</div>



<div class="modal fade" id="enablePagar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
      </button>
      <h3 class="title-info modal-title text-center" style="font-weight: bold;">Resumen de pago</h3>
  </div>
  <div class="modal-body">
    <form class="form">
      <div class="content-sign-up row" style="margin: 0 !important;">
        <input type="hidden" value="" name="idobs">
        <input type="hidden" value="" name="codpacienteobs">
        <div class="col-sm-3 col-xs-12">
          <div class="form-group input-group-full label-floating">
            <label class="control-label">Nro:</label>
            <input class="form-control" readonly="" id="doc_numero" name="doc_numero" type="text" value="aaa">
            <span class="material-input"></span>
        </div>
    </div>
    <div class="col-sm-9 col-xs-12">
      <div class="form-group input-group-full label-floating">
        <label class="control-label">Clínica</label>
        <input class="form-control" readonly="" id="doc_clinica" name="doc_clinica" type="text" value="aaa">
        <span class="material-input"></span>
    </div>
</div>
<div class="col-sm-3 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Fecha</label>
    <input class="form-control" readonly="" id="doc_fecha" name="doc_fecha" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-9 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Paciente</label>
    <input class="form-control" readonly="" id="doc_paciente" name="doc_paciente" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Tipo de Servicio</label>
    <input class="form-control" readonly="" id="doc_servicio" name="doc_servicio" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Especialidad</label>
    <input class="form-control" readonly="" id="doc_especialidad" name="doc_especialidad" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Diagnóstico</label>
    <input class="form-control" readonly="" id="doc_diagnostico" name="doc_diagnostico" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Servicio Brindado</label>
    <input class="form-control" readonly="" id="c_servicio_brindado" name="c_servicio_brindado" type="text" value="aaa">
    <span class="material-input"></span>
</div>
</div>
<div class="col-sm-6 col-sm-push-6 col-xs-12">
  <div class="form-group input-group-full label-floating">
    <label class="control-label">Total inc. IGV</label>
    <div class="input-group" value="aaa">
      <span class="input-group-addon" id="basic-addon1">S/.</span>
      <input readonly="" id="doc_precio" name="doc_precio" placeholder="Total inc IGV" class="form-control" type="text" value="aaa">
  </div>
</div>
</div>
<div class="col-xs-12">
  <div class="checkbox">
    <label>
      <input type="checkbox" name="terminos">
      <span class="checkbox-material"></span>
      Acepto los <a href="">Términos y condiciones</a> del servicio.
  </label>
</div>
</div>
<div class="col-xs-12">
  <div class="radio text-right">
    <a href="#" class="btn btn-primary btn-md" id="btn_pago" onclick="javascript:validarCulqi();">Continuar con el Pago</a>
</div>
</div>
<div class="col-xs-12">
  <br>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



<script type="text/javascript">
  $(document).on("click",".registro-header",function(){


    var identificador = $(this).data('identificador');
    var registro = $("#registro-in-"+identificador);
    var progreso = $("#progress-"+identificador);
    var inbox = $("#inbox-"+identificador);

    if ( registro.hasClass('registro-open') ) {
      registro.removeClass('registro-open');
      progreso.removeClass('progress-line-open');
      inbox.removeClass('inbox-contenido-open');
  }
  else {
      registro.addClass('registro-open');
      progreso.addClass('progress-line-open');
      setTimeout(function(){
        inbox.addClass('inbox-contenido-open');
        progreso.removeClass('progress-line-open');
    }, 500);
  }
  registro.siblings().removeClass('registro-open');

});
</script>


<!-- CULQI -->
<script src="https://pago.culqi.com/api/v1/culqi.js"></script>
<script src="{{asset('static/js/culqi-helpers.js')}}"></script>
<script>
  var precio_culqi = 0;
  var id_carta = 0;
  var servicio_final = '';
    // swal('¡Excelente!','¡Load!','success');
    $(document).on("click", ".pagarServicio", function () {

        // swal('¡Excelente!','¡Click!','success');
        var cartaID = $(this).data('carta');
        var fecha = $(this).data('fecha');
        var clinica = $(this).data('clinica');
        var paciente = $(this).data('paciente');
        var servicio = $(this).data('servicio');
        var especialidad = $(this).data('especialidad');
        var medico = $(this).data('medico');
        var diagnostico = $(this).data('diagnostico');
        var informe = $(this).data('informe');
        var precio = $(this).data('precio');
        var observacion = $(this).data('observacion');
        var servicio_brindado = $(this).data('brindado');

        // $(".modal-body #doc_numero").val(cartaID);
        // $(".modal-body #doc_clinica").val(clinica);
        // $(".modal-body #doc_fecha").val(fecha);
        // $(".modal-body #doc_paciente").val(paciente);
        // $(".modal-body #doc_servicio").val(servicio);
        // $(".modal-body #doc_especialidad").val(especialidad);
        // $(".modal-body #doc_diagnostico").val(diagnostico);
        // $(".modal-body #doc_precio").val(precio);
        // $(".modal-body #c_servicio_brindado").val(servicio_brindado);

        precio_culqi = precio.split('.').join("");
        id_carta = cartaID;

        servicio_final = servicio_brindado;

        validarCulqi();

        // $('#enablePagar').modal('show');
    });

    //CULQI
    var cod_respuesta = '';
    var info_venta = '';
    var cod_comercio = '';
    var num_pedido = '';
    var msj_respuesta = '';
    var ticket_venta = '';

    function validarCulqi() {

      // if( !$("input[name='terminos']:checked").val() ) {
      //   swal("¡Debes aceptar los términos!");
      //   return false;
      // }

      post_data =
      {
        id_usuario_comercio:      '{{ Auth::user()->id }}',
        nombres:                  '{{ Auth::user()->usuario_nombre }}',
        apellidos:                '{{ Auth::user()->usuario_apepat.' '.Auth::user()->usuario_apemat }}',
        ciudad:                   '{{ Auth::user()->ciudad_codigo }}',
        cod_pais:                 '{{ Auth::user()->pais_cod }}',
        correo_electronico:       '{{ Auth::user()->email }}',
        direccion:                '{{ Auth::user()->c_direccion }}',
        num_tel:                  '{{ str_replace(' ', '', Auth::user()->c_telefono_movil) }}',
        moneda:                   'PEN',
        precio:                   precio_culqi
    }


    $.post("{{url('culqi/validarPago.php')}}", post_data, function(response)
    {
            // alert(response.cod_respuesta);
            if (response.cod_respuesta == 'venta_registrada') {
                //Guardar datos de venta_registrada en variables globales
                cod_respuesta = response.cod_respuesta;
                info_venta = response.info_venta;
                cod_comercio = response.cod_comercio;
                num_pedido = response.num_pedido;
                msj_respuesta = response.msj_respuesta;
                ticket_venta = response.ticket_venta;

                checkout.codigo_comercio = cod_comercio;
                checkout.informacion_venta = info_venta;

                console.log(response);
                checkout.abrir();
            }
            else {
                //Respuesta error
                swal(response.cod_respuesta,'¡Ha sucedido un error x1!','error');
            }
        }, 'json');
}

function culqi(checkout)
{
        // Aquí recibes la respuesta del formulario de pago.
        // Si el usuario cierra el formulario de pago: checkout.respuesta tendrá en valor "checkout_cerrado"
        console.log(checkout.respuesta);
        // Cierra el formulario de pago de Culqi.
        checkout.cerrar();
        // Envía la respuesta cifrada que recibiste del formulario de Culqi a tu
        // servidor para descifrarlo, tu servidor lo descifra con la librería
        // de culqi y con esos datos muestra la vista de venta realizada
        var json = JSON.stringify({
          informacionDeVentaCifrada: checkout.respuesta
      });

        post_data =
        {
          venta_cifrada : checkout.respuesta
      }

      $.post("{{url('culqi/descifrarRespuesta.php')}}", post_data, function(response)
      {
          console.log(response);
          if(response.mensaje_respuesta == 'Su compra ha sido exitosa.')
          {
            $('#enablePagar').modal('hide');
            /*Actualizar Pago*/
            var respuesta_culqi = response.mensaje_respuesta;
            var num_pedido = response.num_pedido;
            var num_tarjeta = response.num_tarjeta;
            var marca_tarjeta = response.marca_tarjeta;
            var titular_nombre = response.titular_nombre;
            var titular_apellido = response.titular_apellido;
            var fecha = response.fecha;

            post_data_track =
            {
              id_usuario : '{{ Auth::user()->id }}',
              id_carta : id_carta,
              c_numero_pedido : num_pedido,
              id_transaccion: info_venta,
              c_ticket: ticket_venta,
              d_fecha: fecha,
              titular_nombre: titular_nombre,
              titular_apellido: titular_apellido,
              c_email: '{{ Auth::user()->email }}',
              c_banco_nombre :marca_tarjeta
          }

          $('#num_pedido').html(num_pedido);
          $('#num_tarjeta').html(num_tarjeta);
          $('#marca_tarjeta').html(marca_tarjeta);
          $('#titular').html(titular_nombre+' '+titular_apellido);

          var id_usuario_session = "{{ Auth::user()->id }}";

          $('#facturaModal').modal('show'); 

          $.post("{{route('cuenta.tracking.pagar')}}", post_data_track, function(response) {

              swal(response.type,'¡Hemos enviado un correo!','success');

              if(response.type == 'exito') {

                swal('¡Grandioso!','¡Hemos enviado un correo!','success');

                        //Enviar factura
                        post_data_correo = 
                        {
                          correo : '{{ Auth::user()->email }}',
                          precio : precio_culqi,
                          servicio_brindado: servicio_final
                      }

                        // $.post('assets/email/enviar-factura-servicio.php', post_data_correo, function (response) {
                        //     console.log(response.type + " " + response.text);
                        //     if (response.type == 'enviado') {
                        //         var mensajeHTML = respuesta_culqi + '<br>Número de Pedido: ' + num_pedido + '<br>Número de tarjeta: ' + num_tarjeta + '<br>Entidad: ' + marca_tarjeta + '<br>Titular: ' + titular_nombre + ' ' + titular_apellido;
                        //         //Mostrar el pop-up de respuesta
                        //         $('#modalConfirmacion .modal-body #status-msg').html(mensajeHTML);
                        //         $('#modalConfirmacion').modal('show');
                        //     }
                        //     else {
                        //         console.log('No se ha enviado');
                        //         //Respuesta error
                        //     }
                        // }, 'json');
                    }
                    else{
                        swal('No se puedo confirmar el pago','¡Ha sucedido un error!','error');
                    }
                }, 'json');



      } else {
        swal(response.mensaje_respuesta,'¡Ha sucedido un error!','error');
    }
}, 'json');
  };
</script>
@stop