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
						<h4 class="card-title">Business Dashboard</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead class="text-rose">
											<tr>
												<th>Last Sent</th>
												<th>Business Name</th>
												<th># Feedback Request Sent</th>
												<th># Feedback Request Rec'd</th>
												<th>Non-Positive Feedback</th>
												<th>Total Online Reviews</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach( Empresa::all() as $empresa )
											<tr>
												<td>
													22-12-2016
												</td>
												<td><a href="{{route('empresa.show',$empresa->id)}}">{{$empresa->name}}</a></td>
												<td>11</td>
												<td>11</td>
												<td>11</td>
												<td>11</td>
												<td>
			                                        <a href="{{route('empresa.edit',$empresa->id)}}" type="button" class="btn btn-success btn-simple btn-xs" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit" aria-describedby="tooltip871083">
			                                            <i class="material-icons">edit</i>
			                                        </a>
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
								<a href="{{route('empresa.create')}}" class="btn btn-primary btn-rose"><i class="material-icons">add_circle_outline</i> Add Business</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h3>Statistical</h3>
		
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="orange">
						<i class="material-icons">call_made</i>
					</div>
					<div class="card-content">
						<p class="category">Feedback Requests Sent</p>
						<h3 class="card-title">184</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Last Month
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="green">
						<i class="material-icons">call_received</i>
					</div>
					<div class="card-content">
						<p class="category">Feedback Requests Rec'd</p>
						<h3 class="card-title">150</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Last Month
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="red">
						<i class="material-icons">shuffle</i>
					</div>
					<div class="card-content">
						<p class="category">Non-Positive Reviews</p>
						<h3 class="card-title">13</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Last Month
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="blue">
						<i class="material-icons">mail_outline</i>
					</div>
					<div class="card-content">
						<p class="category">Total Online Reviews</p>
						<h3 class="card-title">+245</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">date_range</i> Last Month
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