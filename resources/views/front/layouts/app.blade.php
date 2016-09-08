<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AngloIberianLanguages</title>

	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
	<link rel="stylesheet" href="{{ asset('plugins/flickity/flickity.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main_style.min.css') }}">

</head>

<body id="app-layout" data-spy="scroll" data-target=".navbar">

	@include('front.layouts.partials.callme')
	@include('front.layouts.partials.navbar')

	{{-- <body data-spy="scroll" data-target=".navbar"> --}}

		{{-- @if (session()->has('flash_notification.message'))
		<div class="alert alert-{{ session('flash_notification.level') }}">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

			{!! session('flash_notification.message') !!}
		</div>
		@endif --}}

					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>

		@include('flash::message')

		@yield('content')

		@include('front.layouts.modals.contact-modal')
		@include('front.layouts.modals.policy-modal')
		@include('front.layouts.modals.terms-modal')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script src="{{ asset('plugins/flickity/flickity.pkgd.min.js') }}"></script>
		<script src="{{ asset('js/form-validator.js') }}"></script>
		<script src="{{ asset('js/config-flickity.js')}}"></script>
		<script src="{{ asset('js/config-navbar.js')}}"></script>
		<script src="{{ asset('js/config-anchorScroll.js')}}"></script>
		<script>
			$('.navbar-collapse a').click(function(){
				$(".navbar-collapse").collapse('hide');
			});
		</script>

		<script>
			$('#flash-overlay-modal').modal();
		</script>

		<script type="text/javascript">
		$('.field').tooltip('container: body');
		</script>

	</body>
	</html>
