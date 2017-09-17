@extends('panel.layouts.master')


@section('content')
<div class="container container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">

			<h3 class="page-header">
				<a href="{{route('panel.index')}}">Dashboard</a> / Add Business
			</h3>

		</div>
	</div>
	<!-- /.row -->
	<form method="post" action="{{route('empresa.store')}}">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="form-group">
			    <label>Business Name*</label>
				<input type="text" name="nombre_empresa" class="form-control" placeholder="Business Name" required="true">
			</div>
			<div class="form-group">
			    <label>Owner First Name*</label>
				<input type="text" name="first_name" class="form-control" placeholder="First Name" required="true">
			</div>
			<div class="form-group">
			    <label>Owner Last Name*</label>
				<input type="text" name="last_name" class="form-control" placeholder="Last Name" required="true">
			</div>
			<div class="form-group">
			    <label>Email*</label>
				<input type="text" name="email" class="form-control" placeholder="Email" required="true">
			</div>
			<div class="form-group">
				<input type="submit" value="+ Add Business" class="btn btn-success">
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