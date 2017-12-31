<fieldset class="form-group{{$errors->has('name') ? ' has-error' : '' }}">
	<label for="name" class="col-sm-2 control-label">Category Name</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="name" id="name" placeholder="My Great Awards" value="{{old('name')}}">
		@if ($errors->has('name'))
			<span class="help-block">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
		@endif
	</div>
</fieldset>							