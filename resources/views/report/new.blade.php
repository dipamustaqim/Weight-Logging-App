@extends('master')

@section('content')
	<a href="{{ url('/') }}"><h4>Back to index</h4></a>
	<form method="post" action="{{ url('/') }}">
		{{csrf_field()}}
		<div class="form-group">
			<label for="min">Min</label>
			<input type="number" class="form-control" id="min" name="min"  required>
		</div>
		<div class="form-group">
			<label for="min">Max</label>
			<input type="number" class="form-control" id="max" name="max" required>
		</div>
		<div class="form-group">
			<label for="min">Variance</label>
			<input type="number" class="form-control" id="variance" name="variance" required>
		</div>
		<button type="submit" class="btn">Submit</button>
	</form>
@endsection