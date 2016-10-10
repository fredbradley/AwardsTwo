@extends('judge.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Entrant!
                </div>
            </div>
        </div>
        <section class="col-md-3">
        	<aside class="widget">
        		<h4>Time until the deadline</h4>
        		{{session('award')->timeUntilDeadline()}}
        	</aside>
        </section>
    </div>
</div>
@endsection

@section('customhead')
@parent
@endsection