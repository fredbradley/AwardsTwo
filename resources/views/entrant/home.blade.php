@extends('entrant.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Choose an Award</div>

                <div class="panel-body">
                <ul class="list-group">


                	@foreach ($awards as $award)
                	  <li class="list-group-item"><a href="{{url('?chosen-award-id='.$award->id)}}">{{$award->name}}</a></li>
					@endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customhead')
@parent
@endsection