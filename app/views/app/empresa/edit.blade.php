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
						{{ Form::open(array( 'action' => array('EmpresaController@update',$empresa->id), 'class' => '')) }}
						<h4 class="card-title"><a href="{{route('principal.panel')}}" class="text-rose">Business Dashboard</a> / <a href="{{route('empresa.show',$empresa->id)}}" class="text-rose">{{$empresa->name}}</a> / Edit</h4>
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$name = '';
									if ($empresa->name != '') {
										$name = $empresa->name;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Business Name</label>
									<input type="text" class="form-control" name="name" required="true" value="{{$name}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$owner_firstname = '';
									if ($empresa->owner_firstname != '') {
										$owner_firstname = $empresa->owner_firstname;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Owner First Name</label>
									<input type="text" class="form-control" name="owner_firstname" required="true" value="{{$owner_firstname}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$owner_lastname = '';
									if ($empresa->owner_lastname != '') {
										$owner_lastname = $empresa->owner_lastname;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Owner Last Name</label>
									<input type="text" class="form-control" name="owner_lastname" required="true" value="{{$owner_lastname}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$owner_email = '';
									if ($empresa->owner_email != '') {
										$owner_email = $empresa->owner_email;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Owner Email</label>
									<input type="email" class="form-control" name="owner_email" required="true" value="{{$owner_email}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							     <?php 
									$isEmpty = '';
									$country = '';
									if ($empresa->country != '') {
										$country = $empresa->country;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Country</label>
									<input type="text" class="form-control" name="country" required="true" value="{{$country}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$state_province = '';
									if ($empresa->state_province != '') {
										$state_province = $empresa->state_province;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">State/Province</label>
									<input type="text" class="form-control" name="state_province" required="true" value="{{$state_province}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$city = '';
									if ($empresa->city != '') {
										$city = $empresa->city;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">City</label>
									<input type="text" class="form-control" name="city" required="true" value="{{$city}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$address = '';
									if ($empresa->address != '') {
										$address = $empresa->address;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Address</label>
									<input type="text" class="form-control" name="address" required="true" value="{{$address}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$phone = '';
									if ($empresa->phone != '') {
										$phone = $empresa->phone;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" name="phone" required="true" value="{{$phone}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$website = '';
									if ($empresa->website != '') {
										$website = $empresa->website;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<label class="control-label">Website</label>
									<input type="text" class="form-control" name="website" required="true" value="{{$website}}">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
								
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							    <?php 
									$isEmpty = '';
									$type = '';
									if ($empresa->type != '') {
										$type = $empresa->type;
									} else {
										$isEmpty = 'is-empty';
									}
									?>
								<div class="form-group label-floating {{$isEmpty}}">
									<select name="type" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue" required="true">
									    @if( $type == 'Agency' )
									    <option value="">Type of Business</option>
										<option value="Agency" selected="true">Agency</option>
										<option value="Education">Education</option>
										<option value="Development">Development</option>
										<option value="Other">Other</option>
										@elseif( $empresa->type == 'Education' )
										<option value="">Type of Business</option>
										<option value="Agency">Agency</option>
										<option value="Education" selected="true">Education</option>
										<option value="Development">Development</option>
										<option value="Other">Other</option>
										@elseif( $empresa->type == 'Development' )
										<option value="">Type of Business</option>
										<option value="Agency">Agency</option>
										<option value="Education">Education</option>
										<option value="Development" selected="true">Development</option>
										<option value="Other">Other</option>
										@else
										<option value="">Type of Business</option>
										<option value="Agency">Agency</option>
										<option value="Education">Education</option>
										<option value="Development" selected="true">Development</option>
										<option value="Other">Other</option>
										@endif
									</select>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
								<button type="submit" class="btn btn-fill btn-rose">Update Business</button>
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