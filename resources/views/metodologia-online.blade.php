@extends('layout.app')
@section('content')
<div class="contenedor">
	<div style="margin-top: 150px;"></div>
	<div class="row">
		<div class="col-md-3">
			<img src="{{asset('img/student5-online.JPG')}}" id="img-student-online">
		</div>
		<div class="col-md-9">
			<h1 class="titulo">Metodología Online</h1>
		<p class="article"><strong>English New Deal online (Advance learners program)</strong> cuenta con 3 modulos en 9 niveles.</p> <p class="article">Lo primero es la realización de un quiz seat <strong>(Scholastict English Aptitude Test)</strong>. Recibirás una orientación del curso, se explicará las herramientas pedagogicas con metas semanales de aprendizaje. Necesitará de un pc o tablet con internet. Las clases online serán grabadas para su disponibilidad.</p>
		  	
		</div>
	</div>
	<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/logo-importante.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/logo-importante.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/logo-importante.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
	
</div>
<div style="margin-bottom: 20px;"></div>
@include('includes.nuestra-escuela-online')
@endsection