@extends('cuenta.layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">

		    @foreach( Promocionado::whereStatus(1)->orderBy('orden','asc')->get() as $promocion )
			<div class="col-md-4 col-sm-6 col-xs-12 promo-assistsalud">
				<div class="card">
					<div class="card-header card-chart" style='background-image: url({{asset("uploads/$promocion->nombre_imagen")}});'>
					</div>
					<div class="card-content">
					    <h3 class="promo-descuento">{{$promocion->titulo}}</h3>
						<h4 class="title">{{$promocion->subtitulo}}</h4>
						<p class="category">{{$promocion->detalle}}</p>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Fecha inicio: {{$promocion->fecha_inicio}}
						</div>
						<div class="stats">
							<i class="material-icons">date_range</i> Fecha fin: {{$promocion->fecha_fin}}
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>
@stop

@section('css')
<style type="text/css">
	.promo-assistsalud{
		max-width: 400px;
	}
	.promo-descuento{
		    margin-top: 0;
    margin-bottom: 0;
    font-weight: bold;
	}
</style>
@stop