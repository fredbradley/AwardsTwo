@extends('judge.layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-md-12 pr0">
				<div class="card card-inverse">
					<div class="card-header card-primary">
						Edit Award: <em>{{$award->name}}</em>
					</div>
					<div class="card-block">
						<form class="form-horizontal" action="{{route('judge.awards.update', $award->id)}}" method="POST">
							<input type="hidden" name="_method" value="PUT">
							{{csrf_field()}}
							<fieldset class="form-group{{$errors->has('name') ? ' has-error' : '' }}">
								<label for="name" class="col-sm-2 control-label">Award Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" placeholder="My Great Awards" value="{{old('name', $award->name)}}">
									@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
							</fieldset>
							<fieldset class="form-group{{$errors->has('prefix') ? ' has-error' : '' }}">
								<label for="prefix" class="col-sm-2 control-label">Database Prefix</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="prefix" disabled="disabled" placeholder="My Great Awards" value="{{old('name', $award->prefix)}}">
									@if ($errors->has('prefix'))
										<span class="help-block">
											<strong>{{ $errors->first('prefix') }}</strong>
										</span>
									@endif
								</div>
							</fieldset>
							<fieldset class="form-group{{$errors->has('event_admin_name') ? ' has-error' : '' }}">
								<label for="event_admin_name" class="col-sm-2 control-label">Admin Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="event_admin_name" placeholder="My Name" value="{{old('event_admin_name', $award->event_admin_name)}}">
									@if ($errors->has('event_admin_name'))
										<span class="help-block">
											<strong>{{ $errors->first('event_admin_name') }}</strong>
										</span>
									@endif
								</div>
							</fieldset>
							<fieldset class="form-group{{$errors->has('event_admin_email') ? ' has-error' : '' }}">
								<label for="name" class="col-sm-2 control-label">Admin Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="event_admin_email" placeholder="my@email.com" value="{{old('event_admin_email', $award->event_admin_email)}}">
									@if ($errors->has('event_admin_email'))
										<span class="help-block">
											<strong>{{ $errors->first('event_admin_email') }}</strong>
										</span>
									@endif
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Save</button> &nbsp; 
								</div>
							</fieldset>
						</form>
					</div>
				</div>
	
			</div>
			
		</div>
	</div>
@stop