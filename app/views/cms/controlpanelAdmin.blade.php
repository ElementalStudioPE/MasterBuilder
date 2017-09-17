
@extends('layout')
 
@section('content')
  

  <div class='tabber'>
    <ul id='tabs'>
      <li><a href='#' rel='div.tab1'> Futbol</a></li>
      <li><a href='#' rel='div.tab2'> Ver por dia </a></li>
      <!-- <li><a href='#' rel='div.tab3'> Prepago</a></li> -->
    </ul>

    <div class='tab tab1'>

      <div>

        {{ Form::open(array('url' => 'exportarCreditoDATE', 'method'=>'GET', 'id'=>'access', 'class'=>'form-login')) }}
          <p>Total de registros: {{ $totales['totalCredito'] }}</p>

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
          <a href="{{ URL::to('exportarCreditoXLS') }}" class="btn"> Descargar</a>

          <!-- <hr>
          <p>Limpiar Base de datos</p>
          <a href="{{ URL::to('exportarDebito') }}" class="btn">Limpiar</a> -->

        {{ Form::close() }}

      </div>

    </div>

      <div class='tab tab2'>

        <div class="totales">
          

          @foreach($totales['fechasAgrupadas'] as $result)
            <div>
              <span>{{$result->date_register}}</span>
              <span class='total'>{{$result->total}}</span>
            </div>
          @endforeach

        </div>

      </div>







  </div>

@stop