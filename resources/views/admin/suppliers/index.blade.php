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
					Suppliers
					<a href="{{ route('admin.suppliers.create') }}" class="btn btn-xs btn-default pull-right">Add supplier</a>
				</div>

				<table class="table table-hover">
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Email</th>
						<th>Phone1</th>
						<th>Date Added</th>
						<th>Actions</th>
					</tr>
					@forelse ($suppliers as $supplier)
					<tr>
						<td>{{ $supplier->name }}</td>
						<td>{{ $supplier->location }}</td>
						<td>{{ $supplier->email }}</td>
						<td>{{ $supplier->telephone1 }}</td>
						<td>{{ date('M j, 20y', strtotime($supplier->date_added)) }}</td>
						<td>
							<a href="{{ route('admin.suppliers.show', $supplier->id) }}" class="btn btn-xs btn-primary">View</a> /
							<a href="{{ action('Admin\SuppliersController@edit', $supplier->id) }}" class="btn btn-xs btn-warning">Edit</a> /
							<a href="#delete" class="btn btn-xs btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Remove</a>
						</td>
					</tr>
					@empty
					<tr><td colspan=6>No records.</td></tr>
					@endforelse
				</table>
				
				@include('admin.suppliers.partials.removeModal')
			</div>
		</div>
	</div>
</div>

@stop