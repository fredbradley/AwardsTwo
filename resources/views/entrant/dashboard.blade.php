@extends('entrant.layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Entries Dashboard</div>

                <div class="panel-body">
                    <div class="table-responsive">
                    	<table class="table table-striped table-hover">
                    		<thead>
                    			<th>Entry</th>
                    			<th>Category</th>
                    			<th>Status</th>
                    		</thead>
                    		<tbody>
							@forelse ($entries as $entry)
								<tr>
									<td>{{$entry->Entry_Name}}</td>
									<td>{{$entry->Entry_Name}}</td>
									<td>{{$entry->updated_at}}</td>
								</tr>
							@empty
							    <p>No users</p>
							@endforelse
                    		</tbody>
                    	</table>
                    </div>
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