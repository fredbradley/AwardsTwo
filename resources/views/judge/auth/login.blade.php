@extends('judge.layouts.auth')

@section('page_title')
	Login
@stop

@section('section')
	
	<form class="login-page-buttons" role="form" method="POST" action="{{ url('/login') }}">
		{{ csrf_field() }}

		<fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<div class="col-md-12">
				<input id="email" type="email" class="form-control input-underline input-lg" name="email" placeholder="{{ Lang::get(\Session::get('lang').'.email') }}" value="{{ old('email') }}">

				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
		</fieldset>

		<fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<div class="col-md-12">
				<input id="password" type="password" class="input-underline input-lg form-control" placeholder="{{ Lang::get(\Session::get('lang').'.password') }}" name="password">

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
		</fieldset>
		<input type="submit" class="btn btn-rounded btn-white p1025" value="{{ Lang::get(\Session::get('lang').'.login') }}" />

	</form>
@stop