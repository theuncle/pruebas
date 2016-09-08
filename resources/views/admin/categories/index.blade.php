@extends('admin.layouts.app')

@section('title', 'Lista de categorías')

@section('content')

<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Nueva categoría</a>

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

			@foreach($categories as $category)
			<tr> 
				<td scope="row">{{ $category->id }}</td> 
				<td>{{ $category->name }}</td> 				
				<td class="text-right">
					<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-wrench"></a> 
					<a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Seguro que quieres borrar la categoría - {{ $category->name }} - ?')" class="btn btn-danger" title="Borrar"><span class="glyphicon glyphicon-remove-circle"></span></a>
				</td> 
			</tr>
			@endforeach 

		</tbody> 
	</table>
</div>

<div class="text-center">
	{!! $categories->render() !!}
</div>

@endsection