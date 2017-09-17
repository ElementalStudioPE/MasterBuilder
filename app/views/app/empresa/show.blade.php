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
						<h4 class="card-title">
							<a href="{{route('principal.panel')}}" class="text-rose">Business Dashboard</a> / {{$empresa->name}} <a href="{{route('empresa.edit',$empresa->id)}}" type="button" class="btn btn-success btn-simple btn-xs"><i class="material-icons">edit</i></a>
						</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead class="text-rose">
											<tr>
												<th>Fullname</th>
												<th>Email</th>
												<th>Status</th>
												<th>Reviews</th>
												<th>Feedback</th>
												<th>Preview</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach( $clientes as $cliente )
											<tr>
												<td><a href="{{route('clientes.show', array($empresa->id,$cliente->id))}}">{{$cliente->full_name}}</a></td>
												<td>{{$cliente->email}}</td>
												<td>
												    <?php $feedbackuser = Feedbackuser::whereCliente_id($cliente->id)->orderby('created_at','desc')->first(); ?>
												    @if($feedbackuser)
												    	@if($feedbackuser->status == '0')
												    	<button class="btn btn-warning btn-xs">Feedback Sended</button>
												    	@else
												    	<button class="btn btn-success btn-xs">Feedback received</button>
												    	@endif
												    @else
												    <button class="btn btn-default btn-xs">None</button>
												    @endif
												</td>
												<td>
													--/10
												</td>
												<td>--</td>
												<td>
													<a href="#" type="button" class="btn btn-simple btn-xs">
														<i class="material-icons">email</i>
													</a>
												</td>
												<td>
												    <?php $feedbackuser = Feedbackuser::whereCliente_id($cliente->id)->orderby('created_at','desc')->first(); ?>
												    @if($feedbackuser)
												    	<button class="btn btn-default" style="min-width: 100px;padding-top: 7px;padding-bottom: 7px;">
															Sended
														</button>
												    @else
												    {{ Form::open(array('route' => 'enviar.email')) }}
												    <input name="cliente_id" value="{{$cliente->id}}" type="hidden">
												    <input name="empresa_id" value="{{$empresa->id}}" type="hidden">
													<button class="btn btn-success" style="min-width: 100px;padding-top: 7px;padding-bottom: 7px;">
														Send <i class="material-icons" style="position: absolute;top: 7px;right: 11px;">send</i>
													</button>
													{{ Form::close() }}
												    @endif
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-right">
								<br><br>
								<a href="{{route('clientes.create',$empresa->id)}}" class="btn btn-primary btn-rose"><i class="material-icons">add_circle_outline</i> Add Client</a>
							</div>
						</div>
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