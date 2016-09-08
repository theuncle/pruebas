@extends('admin.layouts.app')

@section('title', 'Lista de etiquetas')

@section('content')

<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Nueva etiqueta</a>
 
{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
<div class="input-group">
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar etiqueta', 'aria-describedby' => 'search', 'autofocus']) !!}
<span class="input-group-btn">
        <button class="btn btn-info" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>
</div>
{!! Form::close() !!}


<hr>
<div class="table-responsive">
	<table class="table table-striped table-hover"> 
		<thead> 
			<tr> 
				<th>ID</th> 
				<th>Nombre</th> 
				<th class="text-right">Acciones</th>
			</tr> 
		</thead> 
		<tbody> 

			@foreach($tags as $tag)
			<tr> 
				<td scope="row">{{ $tag->id }}</td> 
				<td>{{ $tag->name }}</td> 				
				<td class="text-right">
					<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-wrench"></a> 
					<a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('Seguro que quieres borrar la etiqueta - {{ $tag->name }} - ?')" class="btn btn-danger" title="Borrar"><span class="glyphicon glyphicon-remove-circle"></span></a>
				</td> 
			</tr>
			@endforeach 

		</tbody> 
	</table>
</div>

<div class="text-center">
	{!! $tags->render() !!}
</div>

@endsection