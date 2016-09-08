@extends('admin.layouts.app')

@section('title', 'Crear artículo')

@section('content')


{{-- {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'id' => 'form']) !!} --}}
{!! Form::open(['id' => 'form']) !!}

<div class="form-group">
	{!! Form::label('title', 'Titulo') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'required', 'autofocus']) !!}
</div>

{{-- <div class="form-group">
	{!! Form::label('image', 'Imágen de cabecera') !!}
	{!! Form::textarea('image', null, ['class' => 'form-control textarea-image']) !!}
</div> --}}

<div class="form-group">
	{!! Form::label('category_id', 'Categoria') !!}
	{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'placeholder' => '', 'required']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Cuerpo del artículo') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control textarea-content']) !!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Imágen de cabecera (URL)') !!}
	{!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tags', 'Etiquetas') !!}
	{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
</div>

{{--  <div class="form-group">
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image', ['required']) !!}
</div> --}}

<div class="form-group">
	{{ Form::label('status', 'Publicado?')}}
	{{ Form::checkbox('status') }}
</div>

<div class="form-group">
	{{-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!} --}}
	{!! link_to('#', 'Guardar', ['id' => 'Guardar', 'class' => 'btn btn-primary']) !!}
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

	$("#Guardar").click(function(event)
	{

		var title = $("#title").val();
		var token = $("input[name=_token]").val();

		var route = "{{ route('admin.articles.store') }}";
		var dataString = '"title='+title;

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN':token},
			type: 'POST',
			datatype: 'json',
			data:dataString,
			success:function(data)
			{
				console.log(data);
			},
			error:function(data)
			{
				console.log(data.responseJSON.title);
			}
		});

	})

</script>

@endsection