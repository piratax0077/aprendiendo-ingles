@extends('layout.app')
@section('content')
<div class="contenedor">
<div style="margin-top: 150px;"></div>

<div class="row">
	<div class="col-md-3">
		<img src="{{asset('img/nemotecnia.JPG')}}" id="img-nemotecnia">
	</div>
	<div class="col-md-9">
		<h1 class="titulo">Metodología nemotécnica</h1>
		
		<p class="article">Es un concepto pedagógico escencial que ayuda a desarrollar todas las categorias de habilidades productivas y receptivas, listening, speaking, mejorando asi la capacidad de memorizar, permitiendo reducir el estres y la fatiga que produce el aprendizaje del idioma inglés.</p>
	</div>
</div>
		

	
</div>
<div style="margin-bottom: 20px;"></div>
<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/students-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/students-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/students-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
<div style="margin-bottom: 20px;"></div>

@include('includes.nuestra-escuela-online')
@endsection