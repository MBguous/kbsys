@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			@if(session('status'))
				<div class="alert alert-warning alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				  {{ session('status') }}
				</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					Users
				</div>

				<table class="table">
			      <tr>
			        <th>Username</th>
			        <td>{{ $user->username }}</td>          
			      </tr>
			      <tr>
			        <th>Name</th>
			        <td>{{ $user->name }}</td>
			      </tr>
			      <tr>
			        <th>Email</th>
			        <td>{{ $user->email }}</td>
			      </tr>
			      <tr>
			        <th>Phone1</th>
			        <td>{{ $user->telephone1 }}</td>
			      </tr>
			      <tr>
			        <th>Phone2</th>
			        <td>{{ $user->telephone2 }}</td>
			      </tr>
			      <tr>
			        <th>Address</th>
			        <td>{{ $user->address }}</td>
			      </tr>
			      <tr>
			        <th>Registered Date</th>
			        <td>{{ $user->created_at->format('M j, 20y') }}</td>
			      </tr>
			      <tr>
			        <th>Role</th>
			        <td>{{ $user->roles->first()->name }}</td>
			      </tr>
			      <tr>
			      	<th>Status</th>
			      	<td>{{ $user->is_enabled == 1 ? 'Activated' : 'Deactivated' }}</td>
			      </tr>
			</div>
		</div>
	</div>
</div>
@stop