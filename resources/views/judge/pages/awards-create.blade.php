@extends('judge.layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-md-12 pr0">
				<div class="card card-inverse">
					<div class="card-header card-primary">
						Create Award
					</div>
					<div class="card-block">
						<form class="form-horizontal" action="{{route('judge.awards.store')}}" method="POST">
							{{csrf_field()}}
							<fieldset class="form-group{{$errors->has('name') ? ' has-error' : '' }}">
								<label for="name" class="col-sm-2 control-label">Award Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" id="name" placeholder="My Great Awards" value="{{old('name')}}">
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
									<input type="text" class="form-control" name="prefix" id="prefix" placeholder="Prefix" value="{{old('prefix')}}">
									@if ($errors->has('prefix'))
										<span class="help-block">
											<strong>{{ $errors->first('prefix') }}</strong>
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