@extends('master')

@section('content')
	<a href="{{ url('/') }}"><h4>Back to index</h4></a>

	<form method="post" action="{{ url($report->id.'/edit') }}">
		{{csrf_field()}}
		<div class="form-group">
			<label for="min">Max</lab.el>
			<input type="number" class="form-control" id="max" name="max" value="{{$report->max}}" required>
		</div>
		<div class="form-group">
			<label for="min">Min</label>
			<input type="number" class="form-control" id="min" name="min" value="{{$report->min}}" required>
		</div>
		<div class="form-group">
			<label for="min">Variance</label>
			<input type="number" class="form-control" id="variance" name="variance" value="{{$report->variance}}" required>
		</div>
		<button type="submit" class="btn">Submit</button>
	</form>
@endsection