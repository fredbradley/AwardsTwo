@extends('judge.layouts.plain')
@section('body')
	<div class="login-page">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
				<a href="/home" class="hvr-pulse-grow">
					<i class="fa fa-search fa-fw"></i>
					<!--<img src="images/flat-avatar.png" class="user-avatar" /> -->
				</a>
				<h1><i class="fa fa-fw fa-trophy"></i>Awards Two</h1><br /><br />
					@yield('section')
			</div>			
		</div>
	</div>
@stop
@section('js')
@stop