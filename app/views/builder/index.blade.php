@extends('panel.layouts.master')


@section('content')
<div class="container container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Dashboard
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<a href="{{route('empresa.create')}}" class="btn btn-info">Agregar Empresa <i class="fa fa-plus"></i></a>
			<br><br>
		</div>
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Bussines Name</th>
								<th>Clients</th>
								<th>Mailings</th>
								<th>Sended</th>
							</tr>
						</thead>
						<tbody>
						    @foreach( $empresas as $empresa )
							<tr>
								<td><a href="{{route('empresa.show',$empresa->id)}}">{{$empresa->nombre_empresa}}</a></td>
								<td>{{	Cliente::where('cliente_empresa',$empresa->id)->count();}}</td>
								<td>4</td>
								<td>0</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<br><br><br><br><br>
		</div>
	</div>




</div>
<!-- /.container-fluid -->
@stop