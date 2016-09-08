@extends('admin.layouts.app')

@section('title', 'Editar etiqueta ' . $tag->name)

@section('content')

{!! Form::open(['route' => ['admin.tags.update', $tag->id], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required', 'autofocus']) !!}
</div>

<div class="form-grou">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection