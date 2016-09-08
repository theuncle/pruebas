@extends('admin.layouts.app')

@section('title', 'Crear Usuario')

@section('content')

<div class="col-md-4 col-md-push-4">
	<div class="well">

		<div class="col-md-4 col-md-push-4">

			{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

			<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu nombre', 'required', 'autofocus'] ) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email', 'Email') !!}
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu email', 'required'] ) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password', 'Contraseña') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Introduce una contraseña', 'required'] ) !!}
			</div>

			<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				
				{!! Form::label('password-confirm', 'Repite la contraseña') !!}
				{!! Form::password('password-confirm', ['class' => 'fomr-control', 'placeholder' => 'Vuelve a introducir la contraseña', 'required']) !!}

		{{-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
		<input id="password-confirm" type="password" class="form-control" name="password_confirmation"> --}}

		@if ($errors->has('password_confirmation'))
		<span class="help-block">
			<strong>{{ $errors->first('password_confirmation') }}</strong>
		</span>
		@endif
	</div>


		{{-- <div class="form-group">
		 {!! Form::label('type', 'Tipo') !!}
		 {!! Form::select('type', ['' => 'Selecciona una opción', 'member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
		</div> --}}

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>


		{!! Form::close() !!}
	</div>

</div>
</div>

@endsection