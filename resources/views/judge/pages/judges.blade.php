@extends('judge.layouts.dashboard')
@section('section')
	<pageheader pagename="Table" subtitle="Bootstrap UI Elements"></pageheader>
	<div class="conter-wrapper">				
		
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-default">
						Judges
					</div>
					<div class="card-block">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Surname</th>
									<th>Email</th>
									<th>Company</th>
									<th>Job Title</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($judges as $judge)
								<tr>
									<td>{{$judge->first_name}}</td>
									<td>{{$judge->surname}}</td>
									<td>{{$judge->email}}</td>
									<td>{{$judge->company}}</td>
									<td>{{$judge->jobtitle}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		
	</div>
@stop