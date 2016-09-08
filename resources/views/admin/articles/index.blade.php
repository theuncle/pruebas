@extends('admin.layouts.app')

@section('title', 'Lista de artículos')

@section('content')

<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Nuevo artículo</a>

{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
<div class="input-group">
	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo', 'aria-describedby' => 'search', 'autofocus']) !!}
	<span class="input-group-btn">
		<button class="btn btn-info" type="button"><span class="glyphicon glyphicon-search"></span></button>
	</span>
</div>
{!! Form::close() !!}

<hr>
<div id="articles-list"></div>


@endsection

@section('js')

<script>
	$(document).ready(function(){
		listArticles();
	});

	var listArticles = function()
	{
		$.ajax({
			type: 'get',
			url: '{{ route('admin.articles.listall') }}',
			success: function(data){
				$('#articles-list').empty().html(data);
			}
		});
	}

	$(document).on("click",".pagination li a", function(e) {
		e.preventDefault();

		var url = $(this).attr("href");

		$.ajax({
			type: 'get',
			url: url,
			success: function(data){
				$('#articles-list').empty().html(data);
			}
		});
	});

	var Eliminar = function(id,title)
	{
		$.alertable.confirm("Seguro que quieres eliminar el artículo: " +title).then(function() {

			var route = "{{ route('admin.articles.destroy', ':id') }}";
			route = route.replace(':id', id);
 		// var token = $("#token").val();

 		$.ajax({
 			url: route,
 			// Headers: {'X-CSRF-TOKEN': token},
 			type: 'GET',
 			data: {_method: 'delete'},
 			dataType: 'json',
 			success: function(data){
 				if (data.success == 'true') 
 				{
 					window.location = '{{ route('admin.articles.index') }}';
 				}
 			}
 		});

 	});
	};

</script>
@endsection