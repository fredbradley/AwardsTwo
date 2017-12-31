@extends('judge.layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-primary">
						<h2>Categories
							<a href="{{route('judge.categories.create', ['award' => Route::current()->getParameter('award')])}}" class="btn btn-sm btn-primary pull-right">Add Category</a>
</h2>

					</div>
					<div class="card-block">

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($categories as $category)
								<tr>
									<td><a href="{{route('judge.categories.edit', ['category'=>$category->id, 'award'=>Route::current()->getParameter('award')])}}">{{$category->name}}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		
	</div>
@stop