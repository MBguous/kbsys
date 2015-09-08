{!! csrf_field() !!}

<div class="form-group">
	{!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::text('username', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('telephone1', 'Telephone1', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::text('telephone1', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('telephone2', 'Telephone2', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::text('telephone2', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::text('address', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('role_list', 'Role', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::select('role_list[]', $roles, null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('is_enabled', 'Status', ['class' => 'col-md-4 control-label'])!!}
	<div class="col-md-6">
		{!! Form::radio('is_enabled', 1) !!} Activate <br>
		{!! Form::radio('is_enabled', 0) !!} Deactivate
	</div>
</div>