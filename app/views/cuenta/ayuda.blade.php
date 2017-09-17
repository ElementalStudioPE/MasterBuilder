@extends('cuenta.layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-push-2">
				<div class="card" style="padding: 0px 20px;">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Atención al cliente</h4>
						<p class="category" style="color: #fff;font-size: 15px;">Información de contacto</p>
					</div>
					<div class="card-content table-responsive">
						<form>
							<div class="row text-left" style="margin: 0 !important;">
								<div class="col-xs-12">
									<p><strong>Dirección:</strong></p>
									<p>Av. San Luis 1950 oficina 508, San Borja</p>
								</div>
								<div class="col-xs-12">
									<p><strong>Teléfono Perú:</strong></p>
									<p>+51 1 621 6422</p>
								</div>
								<div class="col-xs-12">
									<p><strong>Teléfono USA:</strong></p>
									<p>+1 (862) 234 0991</p>
								</div>
								<div class="col-xs-12">
									<p><strong>Email:</strong></p>
									<p>info@assistsalud.com</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


@section('css')
<style type="text/css">
	#country{
		border: 0;
		border-bottom: 1px solid #d2d2d2;
		padding-bottom: 12px;
	}
	.country-select.inside .flag-dropdown{
		margin-top: -15px;
	}
</style>
@stop

@section('js')

@stop