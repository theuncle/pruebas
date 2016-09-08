<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel | Admin</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/choosen-bootstrap/choosen-bootstrap.css')}}">
  {{-- <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/alertable.css') }}">

  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">

  @include('admin.layouts.partials.navbar')

  <section class="container main-wrapper">
    <div class="row">

    {{-- @include('flash::message') --}}
  @if (session()->has('flash_notification.message'))
  <div class="alert alert-{{ session('flash_notification.level') }}">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

    {!! session('flash_notification.message') !!}
  </div>
  @endif

  @if(count($errors) > 0)
  <div class="alert alert-danger alert-dismissable">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

      {{-- Este código me devuelve la uri de la página pero no estoy seguro osi ponerlo aqui o en otro sitio --}}
      {{-- {{ Route::getCurrentRoute()->getPath() }} --}}

      {{-- @if (session()->has('flash_notification.message'))
      <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
      </div>
      @endif --}}

      <div class="panel panel-default">
        <div class="panel-heading">
          @yield('title')
        </div>
        
        <div class="panel-body">
          @yield('content')
        </div>
      </div>


    </div>
  </section>

  <footer class="footer">
    &copy Pruebas Laravel 5
  </footer>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
  {{-- <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script> --}}
  {{-- <script src="{{ asset('plugins/trumbowyg/langs/es.min.js') }}"></script> --}}
  <script src="{{ asset('plugins/alertable/alertable.js') }}"></script>
  <script>
    window.setTimeout(function() {
    //$(".custom-alert").alert('close'); <--- Do not use this

    $(".alert").slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);

    $(".alert").on("click", "button.close", function() {
      $(this).parent().animate({opacity: 0}, 500).hide('slow');
    });
  </script>

  @yield('js')

</body>
</html>
