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
						{{ Form::open(array('action' => 'EmpresaController@store', 'class' => '')) }}
						<h4 class="card-title"><a href="{{route('principal.panel')}}" class="text-rose">Business Dashboard</a> / Business Create</h4>
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Business Name</label>
									<input type="text" class="form-control" name="name" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Owner First Name</label>
									<input type="text" class="form-control" name="owner_firstname" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Owner Last Name</label>
									<input type="text" class="form-control" name="owner_lastname" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Owner Email</label>
									<input type="email" class="form-control" name="owner_email" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Country</label>
									<input type="text" class="form-control" name="country" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">State/Province</label>
									<input type="text" class="form-control" name="state_province" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">City</label>
									<input type="text" class="form-control" name="city" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Address</label>
									<input type="text" class="form-control" name="address" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" name="phone" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Website</label>
									<input type="text" class="form-control" name="website" required="true">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
								
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group label-floating is-empty">
									<select name="type" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue" required="true">
									    <option value="">Type of Business</option>
										<option value="Agency">Agency</option>
										<option value="Education">Education</option>
										<option value="Development">Development</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
								<button type="submit" class="btn btn-fill btn-rose">Create Business</button>
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