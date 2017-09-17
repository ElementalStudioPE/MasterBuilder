@extends('app.layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="rose">
						<i class="material-icons">business</i>
					</div>
					<div class="card-content">
						{{ Form::open(array('action' => array('ClienteController@update',$empresa->id,$cliente->id), 'class' => '')) }}
						<h4 class="card-title"><a href="{{route('principal.panel')}}" class="text-rose">Business Dashboard</a> / <a href="{{route('empresa.show',$empresa->id)}}" class="text-rose">{{$empresa->name}}</a> / Update Client</h4>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$first_name = '';
									if ($cliente->first_name != '') {
										$first_name = $cliente->first_name;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">First Name</label>
									<input type="text" class="form-control" name="first_name" required="true" value="{{$first_name}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$last_name = '';
									if ($cliente->last_name != '') {
										$last_name = $cliente->last_name;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Last Name</label>
									<input type="text" class="form-control" name="last_name" required="true" value="{{$last_name}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$email = '';
									if ($cliente->email != '') {
										$email = $cliente->email;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Email</label>
									<input type="email" class="form-control" name="email" required="true" value="{{$email}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$mobile_phone = '';
									if ($cliente->mobile_phone != '') {
										$mobile_phone = $cliente->mobile_phone;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" name="phone" value="{{$mobile_phone}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$comment = '';
									if ($cliente->comment != '') {
										$comment = $cliente->comment;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<textarea class="form-control" name="comment" placeholder="Note about the client" rows="4">{{$comment}}</textarea>
								</div>
							</div>
							<input type="hidden" name="cliente_empresa" value="{{$cliente->id}}">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
								<button type="submit" class="btn btn-fill btn-rose">Update info</button>
							</div>
						</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<br><br><br><br><br>
			</div>
		</div>

	</div>
</div>
@stop

@section('css')
<style type="text/css">
	.table > thead > tr > th {
		border-bottom-width: 1px;
		font-size: 1.15em;
		font-weight: 500;
	}
</style>
@stop