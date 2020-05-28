<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('fas/css/all.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
	<title>Aprendiendo laravel</title>
</head>
<body>
  <div id='app'>
    
  </div>
<nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      @if(Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home" style="color: black;"></i> Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li><button class="btn boton" title="Realizar quiz para determinar que curso le conviene">Realizar quiz</button></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user" style="color: black;"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('misCursos',['id' => Auth::user()->id])}}" class="dropdown-item">Mis cursos</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
  
  </div><br>
    
</nav>
<div class="sub-nav">
    <div class="row">
      <div class="col-md-2 col-xs-1">
        <img src="{{asset('img/logo-importante.JPG')}}" >
      </div>
      <div class="col-md-7 col-xs-12">
        @if(Auth::user())
        <div class="dropdown" >
            <a id="VisionDropDown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >Nosotros</a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="VisionDropDown">
            <a href="{{route('mision')}}" class="dropdown-item">Nuestra Misión</a>
            <a href="{{route('vision')}}" class="dropdown-item">Nuestra Visión</a>
            <a href="{{route('finalidad')}}" class="dropdown-item">Finalidad</a>
          </div>
        </div>
        <div class="dropdown">
          <a id="HowWorkDropDown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Como funciona</a>
        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="HowWorkDropDown">
          <a href="{{route('online')}}" class="dropdown-item">Metodología Online</a>
          <a href="{{route('nemotecnica')}}" class="dropdown-item">Metodología Nemotécnica</a>
          <a href="{{route('ventajas')}}" class="dropdown-item">Ventajas y Beneficios</a>
        </div>
        </div>
        <div class="dropdown" >
            <a id="ModulosDropDown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >Modulos</a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="ModulosDropDown">
            <a href="{{ route('elementary') }}" class="dropdown-item">Elementary</a>
            <a href="{{ route('preliminary') }}" class="dropdown-item">Preliminary</a>
            <a href="{{ route('higher') }}" class="dropdown-item">Higher</a>
          </div>
        </div>
        @else
        <h2 style="margin-left: 290px;margin-top: 7px;">Aprendiendo ingles</h2>
        @endif
      </div>
      <div class="col-md-3 col-xs-1 fono">
        <p><i class="fas fa-phone"></i> 0512-323156</p>
        <img src="{{asset('img/logo-5.JPG')}}" class="logo-right"> 
      </div>
    </div>
  </div>

<main class="py-4">
            @yield('content')
            <span class="ir-arriba">Ir arriba</span>
</main>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@include('includes.modal')
</body>
</html>