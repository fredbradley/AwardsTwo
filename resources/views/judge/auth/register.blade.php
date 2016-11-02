@extends('judge.layouts.auth')

@section('page_title')
	Register
@stop
@section('section')

	<div class="alert alert-danger">
		<p>Self registration to the Judging System is not allowed</p>
	</div>
	<div class="login-page-buttons">
		<a href="/login" class="btn btn-rounded btn-white p1025">{{ Lang::get(\Session::get('lang').'.login') }}</a>
	</div>
@stop 


@section('js')

@stop