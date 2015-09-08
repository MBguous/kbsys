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
					<a href="{{ route('admin.users.create') }}" class="btn btn-xs btn-default pull-right">Add user</a>
				</div>

				<table class="table table-hover">
					<tr>
						<th>Username</th>
						<th>Name</th>
						<th>Phone1</th>
						<th>Email</th>
						<th>Role</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
					@forelse ($users as $user)
					<tr>
						<td>{{ $user->username }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->telephone1 }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->roles->first()->name }}</td>
						<td>{{ $user->is_enabled == 1 ? 'Activated' : 'Deactivated'}}</td>
						<td>
							<a href="{{ route('admin.users.show', $user->username) }}" class="btn btn-xs btn-primary">View</a> /
							<a href="{{ action('Admin\UsersController@edit', $user->username) }}" class="btn btn-xs btn-warning">Edit</a> /
							<a href="#delete" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Remove</a>
						</td>
					</tr>
					@empty
					<tr><td colspan=6>No records.</td></tr>
					@endforelse
				</table>

				@include('admin.users.partials.removeModal')
			</div>
		</div>
	</div>
</div>

@stop