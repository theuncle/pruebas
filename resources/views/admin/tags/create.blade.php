@extends('admin.layouts.app')

@section('title', 'Crear etiqueta')

@section('content')

{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la etiqueta', 'required', 'autofocus']) !!}
</div>

<div class="form-grou">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection