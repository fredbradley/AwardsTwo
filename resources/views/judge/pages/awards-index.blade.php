@extends('judge.layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-primary">
						Awards
					</div>
					<div class="card-block">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Award</th>
									<th>Entry Deadline</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($awards as $award)
								<tr>
									<td><a href="{{route('judge.awards.edit', $award->id)}}">{{$award->name}}</a><br /><span class="label label-default">{{$award->prefix}}</span></td>
									<td>{{Carbon\Carbon::createFromTimestamp($award->entries_close_date)->diffForHumans()}}</td>
									<td><a href="{{route('judge.categories.index', ["award_id"=>$award->id])}}" class="btn btn-sm btn-info"><i class="fa fa-database"></i></a></td>
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