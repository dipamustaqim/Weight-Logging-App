@extends('master')

@section('content')
	<a href="{{ url('/') }}"><h4>Back to index</h4></a>

	<table style="width:100%">
		<tr>
			<th>Date</th>
			<td>{{$report->created_at}}</td>
		</tr>
		<tr>
			<th>Max</th>
			<td>{{$report->max}}</td>
		</tr>
		<tr>
			<th>Min</th>
			<td>{{$report->min}}</td>
		</tr>
		<tr>
			<th>Variance</th>
			<td>{{$report->variance}}</td>
		</tr>
	</table>

@endsection