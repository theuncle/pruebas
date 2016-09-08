@extends('admin.layouts.app')

@section('title', 'Editar artículo - ' . $article->title )

@section('content')


{!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('title', 'Titulo') !!}
	{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'required', 'autofocus']) !!}
</div>

{{-- <div class="form-group">
	{!! Form::label('image', 'Imágen de cabecera') !!}
	{!! Form::textarea('image', $article->image, ['class' => 'form-control textarea-image']) !!}
</div> --}}

<div class="form-group">
	{!! Form::label('category_id', 'Categoria') !!}
	{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category', 'placeholder' => '', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Cuerpo del artículo') !!}
	{!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content']) !!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Imágen de cabecera (URL)') !!}
	{!! Form::text('image', $article->image, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tags', 'Etiquetas') !!}
	{!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple']) !!}
</div>

{{-- 
<div class="form-group">
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image', ['required']) !!}
</div>
--}}

<div class="form-group">
	{{ Form::label('status', 'Publicado?')}}
	{{ Form::checkbox('status', $article->status, $article->status) }}
</div>

<div class="form-grou">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection

@section('js')

<script src='{{ asset('plugins/tinymce/tinymce.min.js') }}'></script>

<script>
	$('.select-tag').chosen({
		placeholder_text_multiple: 'Selecciona hasta 4 etiquetas...',
		max_selected_options: 4,
		search_contains: true,
		no_results_text: 'No se ha encontrado la etiqueta'
	});

	$('.select-category').chosen({
		placeholder_text_single: 'Selecciona una categoría...',
		search_contains: true,
		no_results_text: 'No se ha encontrado la categoría'
	});

		tinymce.init({
		relative_urls: false,
		selector: 'textarea.textarea-content', 
		plugins : 'advlist autolink link image lists charmap print preview',
		toolbar: 'undo redo | styleselect | bold italic | link image | responsivefilemanager',

		external_filemanager_path:"/plugins/filemanager/",
		filemanager_title:"Administrador de archivos AIL" ,
		external_plugins: { "filemanager" : "{{ asset('plugins/filemanager/plugin.min.js') }} "}
	});

	// tinymce.init({
	// 	relative_urls: false,
	// 	selector: 'textarea.textarea-image', 
	// 	forced_root_block : "",
	// 	width: "500",
 //    height: "400",
	// 	plugins : 'image responsivefilemanager',
	// 	toolbar: 'image',
	// 	menubar : false,
	// 	external_filemanager_path:"/plugins/filemanager/",
	// 	filemanager_title:"Administrador de archivos AIL" ,
	// 	external_plugins: { "filemanager" : "{{ asset('plugins/filemanager/plugin.min.js') }} "}
	// });
	</script>

	@endsection