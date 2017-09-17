
@extends('layout')
 
@section('content')
  

  <div class='tabber'>
    <ul id='tabs'>
      <li><a href='#' rel='div.tab1'> Crédito Mamá</a></li>
<!--       <li><a href='#' rel='div.tab2'> Debito </a></li>
<li><a href='#' rel='div.tab3'> Prepago</a></li> -->
    </ul>

    <div class='tab tab1'>

      <div>

        {{ Form::open(array('url' => 'exportarCreditoMPDATE', 'method'=>'GET', 'id'=>'access', 'class'=>'form-login')) }}
          <p>Total de registros: {{ $total }}</p>

          <p>Descargar por rango de fecha</p>

          <div>
            <label>Desde:</label>
            {{ Form::text(
              'fecha_inicio','AAAA-MM-DD',
              array(
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate3'
            )) }}
          </div>
          <div>
            <label>Hasta:</label>
            {{ Form::text(
              'fecha_final','AAAA-MM-DD',
              array(
                  'placeholder' => '',
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate4'
            )) }}
          </div>
          {{ Form::submit('Descargar',array('class' => 'button'))}}

          <hr>

          <p>Descargar Base de datos completa</p>
          <a href="{{ URL::to('exportarCreditoMPXLS') }}" class="btn"> Descargar</a>

          <!-- <hr>
          <p>Limpiar Base de datos</p>
          <a href="{{ URL::to('exportarDebito') }}" class="btn">Limpiar</a> -->

        {{ Form::close() }}

      </div>

    </div>

    <!-- <div class="tab tab2">
      
      <div>
    
        
        {{ Form::open(array('url' => 'exportarDebitoDATE','name'=>'frm-debito', 'method'=>'GET', 'id'=>'access')) }}
          <p>Descargar por rango de fecha</p>
    
          <div>
            <label>Desde:</label>
            {{ Form::text(
              'fecha_inicio','AAAA-MM-DD',
              array(
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate5'
            )) }}
          </div>
          <div>
            <label>Hasta:</label>
            {{ Form::text(
              'fecha_final','AAAA-MM-DD',
              array(
                  'placeholder' => '',
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate6'
            )) }}
          </div>
          {{ Form::submit('Descargar',array('class' => 'button'))}}
    
          <hr>
          <p>Descargar Base de datos completa</p>
          <a href="{{ URL::to('exportarDebitoXLS') }}" class="btn">Descargar</a>
    
        {{ Form::close() }}
    
      </div>
    
    
    </div> -->

    <!-- <div class="tab tab3">
      <div>
        {{ Form::open(array('url' => 'exportarPrepagoDATE','name'=>'frm-prepago', 'method'=>'GET', 'id'=>'access')) }}
          <p>Descargar por rango de fecha</p>
          <div>
            <label>Desde:</label>
            {{ Form::text(
              'fecha_inicio','AAAA-MM-DD',
              array(
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate7'
            )) }}
          </div>
          <div>
            <label>Hasta:</label>
            {{ Form::text(
              'fecha_final','AAAA-MM-DD',
              array(
                  'placeholder' => '',
                  'class'       => 'input inputDate',
                  'maxlength'   => '10',
                  'id'          => 'inputDate8'
            )) }}
          </div>
          {{ Form::submit('Descargar',array('class' => 'button'))}}
          <hr>
          <p>Descargar Base de datos completa</p>
          <a href="{{ URL::to('exportarPrepagoXLS') }}" class="btn">Descargar</a>
        {{ Form::close() }}
      </div>
    </div> -->



  </div>

@stop