@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit {{ $supplier->name }}</div>

				<div class="panel-body">

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


					{!! Form::model($supplier, ['action'=>array('Admin\SuppliersController@update', $supplier->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}

						@include('admin.suppliers.partials.form')

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update
								</button>
								<a href="{{ action('Admin\SuppliersController@index') }}" class="btn btn-danger">
									Cancel
								</a>
							</div>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop