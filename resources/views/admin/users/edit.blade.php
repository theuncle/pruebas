@extends('admin.layouts.app')

@section('title', 'Editar usuario ' . $user->name )

@section('content')

<div class="col-md-4 col-md-push-4">
	<div class="well">

		{!! Form::open(['route' => ['admin.users.update',$user->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Introduce tu nombre', 'required', 'autofocus'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Introduce tu email', 'required'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'],$user->type, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>


		{!! Form::close() !!}

	</div>
</div>

@endsection