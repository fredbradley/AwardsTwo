@extends('judge.layouts.dashboard')
@section('section')
	<pageheader pagename="Table" subtitle="Bootstrap UI Elements"></pageheader>
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
									<th>Prefix</th>
									<th>Entry Deadline</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($awards as $award)
								<tr>
									<td><a href="{{route('judge.awards.edit', $award->id)}}">{{$award->name}}</a></td>
									<td><span class="label label-default">{{$award->prefix}}</span></td>
									<td>{{date(config('app.date_format_with_time'), $award->entries_close_date)}}
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