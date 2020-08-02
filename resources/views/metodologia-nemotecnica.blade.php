@extends('layout.app')
@section('content')
<div class="contenedor">
<div style="margin-top: 100px;"></div>

<div class="row">
	<div class="col-md-3">
		<img src="{{asset('img/nemotecnia.JPG')}}" id="img-nemotecnia">
	</div>
	<div class="col-md-9">
		<h1 class="titulo">Metodología nemotécnica</h1>
		
		<p class="article">Es un concepto pedagógico escencial que ayuda a desarrollar todas las categorias de habilidades productivas y receptivas, listening, speaking, mejorando asi la capacidad de memorizar, permitiendo reducir el estres y la fatiga que produce el aprendizaje del idioma inglés.</p>
	</div>
</div>
<h1 class="titulo mt-5">Técnicas de estudio - algunas reglas mnemotécnicas</h1>
<p>Son muchas las reglas que existen y a continuación describiremos las más detalladas</p>	

</div>
<div style="margin-bottom: 20px;"></div>
<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/nemotecnia-letras.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Metodología de las iniciales</h5>
		    <p class="card-text">Cuando tenemos una lista de palabras que recordar, podemos construir una palabra con la inicial de cada una de ellas, de tal manera que ésta nos recuerde como empieza cada palabra de la lista. Cuando el orden de la lista no es importante, podemos hacer combinaciones hasta que la palabra clave sea la más sencilla de recordar para nosotros.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/nemotecnia-historia.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Metodología de la historia y el relato</h5>
		    <p class="card-text">Se construye una historia con todas las palabras que debemos memorizar y posteriormente recordar. En este caso no es importante el orden, pero sí que aparezcan todos los elementos a memorizar</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/nemotecnia-lugares.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Metodología de los lugares</h5>
		    <p class="card-text">Es un método que permite a través del recuerdo de la imagen de determinados lugares o espacios, recordar las palabras importantes. Así mismo, puedes organizar las palabras en base a recorridos que te resulten conocidos como puede ser el habitual que va desde nuestra casa al instituto.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
<div style="margin-bottom: 20px;"></div>

@include('includes.nuestra-escuela-online')
@endsection