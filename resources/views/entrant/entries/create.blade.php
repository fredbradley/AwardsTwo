@extends('entrant.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">New Entry</div>

                <div class="panel-body">
                    @include('entrant.entries.create_form.step1')
                </div>
            </div>
        </div>
        <section class="col-md-3">
        	<aside class="widget">
        		<h4>Time until the deadline</h4>
        		<a href="{{route("entrant.entries.create")}}">New Entry</a>
        		{{session('award')->timeUntilDeadline()}}
        	</aside>
        </section>
    </div>
</div>
@endsection

@section('customhead')
@parent
@endsection