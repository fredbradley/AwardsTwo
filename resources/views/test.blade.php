@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Award</div>

                <div class="panel-body">
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/award') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('award_name') ? ' has-error' : '' }}">
                            <label for="award_name" class="col-md-4 control-label">Award Name</label>

                            <div class="col-md-6">
                                <input id="award_name" type="text" class="form-control" name="award_name" value="{{ old('award_name') }}">

                                @if ($errors->has('award_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('award_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prefix') ? ' has-error' : '' }}">
                            <label for="prefix" class="col-md-4 control-label">Prefix</label>

                            <div class="col-md-6">
                                <input id="prefix" type="text" class="form-control" name="prefix" value="{{ old('prefix') }}">

                                @if ($errors->has('prefix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prefix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
            	<div class="panel-heading">Heading</div>
            	<div class="panel-body">
            	
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
