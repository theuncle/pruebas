@extends('front.layouts.app')

@section('title', 'Últimos artículos')

@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="row panel">
			<div class="panel-body" style="padding-top: 0;"">
				<div class="row">	
					@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">

								<div class="row">
									<a href="#">
										

										<img src="{{ $article->image }}" class="img-responsive" style="max-height: 150px; margin: 0 auto;" alt="">

										
									</a>
								</div>
								<h3 class="text-center"><a href="{{ route('front.view.article', $article->slug) }}">{{ $article->title }}</a></h3>
								<hr>
								<small><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;<a href="{{ route('front.search.category', $article->category->name) }}"> {{ $article->category->name }}</a></small>
								<div class="pull-right">
									<small><i class="glyphicon glyphicon-time"></i>&nbsp;{{ $article->created_at->diffForHumans() }}</small>
								</div>
							</div>
						</div>
					</div>

					@endforeach
				</div>
			</div>			
		</div>

		<div class="text-center">
			{!! $articles->render() !!}
		</div>

	</div>

	{{-- BArra lateral --}}
	<div class="col-md-4 aside">

		@include('front.layouts.partials.aside')

	</div>
</div>

@endsection