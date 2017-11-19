@extends('master')

@section('content')
	
	<a href="{{url('/new/r')}}"><h4>Add Report</h4></a>

	<table>
		<thead>
			<th>Date</th>
			<th>Max</th>
			<th>Min</th>
			<th>Variance</th>
			<th></th>
			<th></th>
			

		</thead>
		<tbody>
			@php 
				$size = count($reports);
				$totalMin = 0;
				$totalMax = 0;
				$totalVar = 0;
			@endphp
			@for($i = 0; $i<$size; $i++)
				<tr>
					<td>{{ $reports[$i]->created_at }}</td>
					<td>{{ $reports[$i]->max }}</td>
					<td>{{ $reports[$i]->min }}</td>
					<td>{{ $reports[$i]->variance }}</td>
					<td><a href="{{url($reports[$i]->id)}}">Show</a></td>
					<td><a href="{{url($reports[$i]->id . '/edit')}}">Edit</a></td>
					<td><a href="{{url($reports[$i]->id) . '/delete'}}">Delete</a></td>
				</tr>
				@php 
					$totalMin += $reports[$i]->min;
					$totalMax += $reports[$i]->max;
					$totalVar += $reports[$i]->variance;
				@endphp
			@endfor
		</tbody>
		<tfoot>
			<tr>
				<td>Average</td>
				<td>{{ number_format($totalMin/$size, 2) }}</td>
				<td>{{ number_format($totalMax/$size,2) }}</td>
				<td>{{ number_format($totalVar/$size,2) }}</td>
			</tr>
		</tfoot>
	</table>

@endsection