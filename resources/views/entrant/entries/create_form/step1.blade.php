<form class="form-inline" method="post" action="{{route("entrant.entries.store")}}">
	{{csrf_field()}}
	<input type="text" name="test" class="form-control" />
	<input type="submit" class="btn btn-primary" />
</form>