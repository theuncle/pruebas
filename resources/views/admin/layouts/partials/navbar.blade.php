<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="row">
      <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/admin') }}">
          Laravel
        </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->

        @if (Auth::user())
        <ul class="nav navbar-nav">
          @if(Auth::user()->admin())
          <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
          @endif
          <li><a href="{{ route('admin.categories.index') }}">Categorías</a></li>
          <li><a href="{{ route('admin.tags.index') }}">Etiquetas</a></li>
          <li><a href="{{ route('admin.articles.index') }}">Artículos</a></li>
          <li><a href="{{ route('admin.images.index') }}">Imágenes</a></li>
        </ul>
        @endif

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('front.index') }}" target="_blank">Página principal</a></li>
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          {{-- <li><a href="{{ url('/register') }}">Register</a></li> --}}
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>