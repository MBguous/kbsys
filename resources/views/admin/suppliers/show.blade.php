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
					Supplier
				</div>

				<table class="table">
			      <tr>
			        <th>ID</th>
			        <td>{{ $supplier->id }}</td>                    
			      </tr>
			      <tr>
			        <th>Name</th>
			        <td>{{ $supplier->name }}</td>          
			      </tr>
			      <tr>
			        <th>Location</th>
			        <td>{{ $supplier->location }}</td>
			      </tr>
			      <tr>
			        <th>Email</th>
			        <td>{{ $supplier->email }}</td>
			      </tr>
			      <tr>
			        <th>Phone1</th>
			        <td>{{ $supplier->telephone1 }}</td>
			      </tr>
			      <tr>
			        <th>Phone2</th>
			        <td>{{ $supplier->telephone2 }}</td>
			      </tr>
			      <tr>
			        <th>Date Added</th>
			        <td>{{ $supplier->date_added }}</td>
			      </tr>
			      <tr>
			        <th>Default Order Mode</th>
			        <td>{{ $supplier->default_order_mode }}</td>
			      </tr>
			      <tr>
			        <th>Is Enabled</th>
			        <td>{{ $supplier->is_enabled == 1 ? 'Activated' : 'Deactivated' }}</td>
			      </tr>
			</div>
		</div>
	</div>
</div>
@stop