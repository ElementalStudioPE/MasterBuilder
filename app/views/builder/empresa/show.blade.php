@extends('panel.layouts.master')


@section('content')
<!-- Page Heading -->
<section>
	<div class="container container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">
					<a href="{{route('panel.index')}}">Dashboard</a> / Business: {{$empresa->nombre_empresa}} <a href="{{route('empresa.edit',$empresa->id)}}"><i class="fa fa-edit"></i></a>
				</h3>
			</div>
		</div>
	</div>
</section>
<!-- /.row -->
<section style="background: #e1e1e1;">
	<div class="container container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-body">
					<h3>Mailings <a href="{{route('mailing.create',$empresa->id)}}" class="btn btn-info">Create Mailing <i class="fa fa-plus"></i></a></h3>
					<div class="row" style="margin: 0 !important;">
						<div class="col-md-2 col-sm-3 col-xs-6">
							<div class="text-center">
								<img src="{{asset('static/img/mailing-icon.png')}}" class="img-responsive">
								<a href="#" class="btn btn-success" target="_blank">Show Mailing</a>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<div class="text-center">
								<img src="{{asset('static/img/mailing-icon.png')}}" class="img-responsive">
								<a href="#" class="btn btn-success" target="_blank">Show Mailing</a>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</section>
<!-- /.row -->
<section>
	<div class="container container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-body">
					<h3>Users <a href="{{route('clientes.create',$empresa->id)}}" class="btn btn-info">Add User <i class="fa fa-plus"></i></a></h3>
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Full name</th>
									<th>Email</th>
									<th>Mailings Status</th>
									<th>Mailings</th>
									<th>Sended</th>
								</tr>
							</thead>
							<tbody>
								@foreach( $clientes as $cliente )
								<tr>
									<td><a href="{{route('clientes.edit',array($empresa->id,$cliente->id))}}">{{$cliente->full_name}}</a></td>
									<td>{{$cliente->email}}</td>
									<td>No enviado</td>
									<td>-</td>
									<td>-</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<br><br><br><br><br>
			</div>
		</div>
	</div>
</section>
<!-- /.container-fluid -->
@stop