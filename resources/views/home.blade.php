@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="POST" class="form-inline">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<input type="text" name="name" class="form-control" placeholder="Enter a task name">
			<input type="submit" class="btn btn-primary" value="Save">
				
			</form>

			<h3>Task List </h3>

			<table class="table">
				<tr>
				<td>Sl</td>
				<td>Task Name</td>
				<td>Status</td>
				<td>Action</td>
				</tr>
				<?php $i=1; ?>
				@foreach($data as $row)
					<tr>
						<td>{{$i}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->status}}</td>
						<td>
							<a href="{{route('getEditRoute',$row->id)}}" class="btn btn-warning">Edit</a>

	<form action="{{route("deleteTask", ["id"=>$row->id])}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { retrun true } else {return false };">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<button type="submit" class="btn btn-danger">Delete</button>
	</form>



							
						</td>
					</tr>
				<?php $i=$i+1; ?>
				@endforeach

			</table>

		</div>
	</div>
</div>
@endsection
 