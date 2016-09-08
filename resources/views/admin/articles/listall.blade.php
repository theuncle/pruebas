<div class="table-responsive">

	<table class="table table-striped table-hover">	
		<thead> 
			<tr> 
				<th>Estado</th>
				<th>Usuario</th>
				<th>Título</th> 
				<th>Categoría</th>
				<th class="text-right">Acciones</th>
			</tr> 
		</thead> 
		<tbody> 

			@foreach($articles as $article)
			<tr> 
				<td scope="row"> {{ $article->status ? 'Publicado' : 'Sin publicar' }} </td>
				<td>{{ $article->user->name }}</td> 
				<td>{{ $article->title }}</td> 
				<td>{{ $article->category->name }}</td>				
				<td class="text-right">
					<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-wrench"></span></a> 
					{{-- <a id="delete" href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('Seguro que quieres borrar el artículo - {{ $article->title }} - ?')" class="btn btn-danger" title="Borrar"><span class="glyphicon glyphicon-remove-circle"></span></a> --}}
					<a href="#" onclick="Eliminar('{{ $article->id }}', '{{ $article->title }}')" class="btn btn-danger" title="Borrar"><span class="glyphicon glyphicon-remove-circle"></span></a>
				</td> 
			</tr>
			@endforeach 

		</tbody> 
	</table>

	<div class="text-center">
		{!! $articles->render() !!}
	</div>

</div>
