@extends('panel.layouts.master')


@section('content')
<div class="container container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">
				<a href="{{route('panel.index')}}">Dashboard</a> / <a href="{{route('empresa.show',$empresa->id)}}">Business: {{$empresa->nombre_empresa}}</a> / Edit user {{$cliente->first_name}}</h3>
		</div>
	</div>
	<!-- /.row -->
	<form method="post" action="{{route('clientes.update',array($empresa->id,$cliente->id))}}">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="form-group">
			    <label>First Name*</label>
				<input type="text" name="first_name" class="form-control" value="{{$cliente->first_name}}" required="true">
			</div>
			<div class="form-group">
			    <label>Last Name</label>
				<input type="text" name="last_name" class="form-control" value="{{$cliente->last_name}}">
			</div>
			<div class="form-group">
			    <label>Email*</label>
				<input type="text" name="email" class="form-control" value="{{$cliente->email}}" required="true">
			</div>
			<div class="form-group">
			    <label>Phone</label>
				<input type="text" name="mobile_phone" class="form-control" value="{{$cliente->mobile_phone}}">
			</div>
			<div class="form-group">
				<input type="hidden"  name="cliente_empresa" class="form-control" value="{{$empresa->id}}">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Save Changes <i class="fa fa-floppy-o" aria-hidden="true"></i> </button>
			</div>
			<div class="form-group">
				<small>* Required Field</small>
			</div>
		</div>
	</div>
	</form>




</div>
<!-- /.container-fluid -->
@stop