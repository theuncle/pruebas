<div class="panel panel-default">
	<div class="panel-heading">Categorías</div>
	<ul class="list-group">
	@foreach($categories as $category)
		<li class="list-group-item"><a href="{{ route('front.search.category', $category->name) }}">{{ $category->name }}<span class="badge pull-right">{{ $category->articles->count() }}</span></a></li>
	@endforeach
	</ul>
</div>


<div class="panel panel-default">
	<div class="panel-heading">Etiquetas</div>
	<div class="panel-body text-center">
	@foreach($tags as $tag)
		<a href="{{ route('front.search.tag', $tag->name) }}" class="label label-default">{{ $tag->name }}</a>
	@endforeach
	</div>
</div>