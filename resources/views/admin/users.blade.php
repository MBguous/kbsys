@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<table class="table">
					<tr>
						<th>Username</th>
						<th>Name</th>
						<th>Phone1</th>
						<th>Phone2</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
					@foreach ($users as $user)
					<tr>
						<td>{{ $user->username }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->phone1 }}</td>
						<td>{{ $user->phone2 }}</td>
						<td>{{ $user->address }}</td>
						<td>
							<a href="#">View</a>
							<a href="#">Edit</a>
							<a href="#">Remove</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection