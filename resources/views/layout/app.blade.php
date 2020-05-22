<!DOCTYPE html>
<html>
<head>
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
  
<nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          El ingles, idioma universal
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('datos',['id'=>1])}}">El ingles es el idioma universal</a>
          <a class="dropdown-item" href="{{route('datos',['id'=>2])}}">Como afecta no hablar ingles</a>
          <a class="dropdown-item" href="{{route('datos',['id'=>3])}}">Responsabilidad social</a>
          <a class="dropdown-item" href="{{route('datos',['id'=>4])}}">Subvención preferencial</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Otro</a>
        </div>
      </li>
      
    </ul>
    <button class="btn boton" data-toggle="modal" data-target="#exampleModal">Registrate</button>
  </div><br>
    
</nav>
<div class="sub-nav">
    <div class="row">
      <div class="col-md-2">
        <img src="{{asset('img/logo-importante.JPG')}}" >
      </div>
      <div class="col-md-7">
        <a href="{{route('vision')}}">Nuestra visión</a>
        <a href="{{route('mision')}}">Nuestra misión</a>
        <a href="{{route('finalidad')}}">Finalidad</a>
        <a href="{{route('how-work')}}">Como funciona</a>
      </div>
      <div class="col-md-3">
        <p>0512-323156</p>
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