@extends('layout.app')

@section('content')
<div class="contenedor">
  @include('includes.slider')
 
  <div class="row mt-3 pl-1">
  	<div class="col-md-3">
  		<img src="{{asset('img/logo-4.JPG')}}" id="img-logo">
  	</div>
  	<div class="col-md-3 ">
  		<button id="mostrar" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Metodologia online
		 </button>
		 <button id="ocultar" class="btn btn-warning">
			<i class="fas fa-search"></i> Metodologia online
		 </button>
		  <div id="caja" class="caja">
		  	<p>Lo primero es la realización de un quiz seat <strong>(Scholastict English Aptitude Test)</strong>. Recibirás una orientación del curso, se explicará las herramientas pedagogicas con metas semanales de aprendizaje. Necesitará de un pc o tablet con internet. Las clases online serán grabadas para su disponibilidad.</p>
		  	<img src="{{asset('img/student-online.JPG')}}" id="img-student-online">
		  </div>
  	</div>
  	<div class="col-md-3">
  		<button id="mostrar-2" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Metodologia nemotecnica
		 </button>
		 <button id="ocultar-2" class="btn btn-warning">
			<i class="fas fa-search"></i> Metodologia nemotecnica
		 </button>
		  <div id="caja2" class="caja2">
		  	
		  		<li>Fácil</li>
		  		<li>Amena</li> 
		  		<li>Eficaz</li> 
		  	  <p>Es un concepto pedagogíco escencial que ayuda a desarrollar todas las categorias de habilidades productivas y receptivas, listening, speaking, mejorando asi la capacidad de memorizar, permitiendo reducir el estres y la fatiga que produce el aprendizaje del idioma inglés.</p>
		  	  <li>Avance real continuo </li>
		  	  <li>Practica semanal de contenidos academicos</li>
		  </div>
  	</div>
  <div class="col-md-3">
  		<button id="mostrar-3" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Ventajas y beneficios
		 </button>
		 <button id="ocultar-3" class="btn btn-warning">
			<i class="fas fa-search"></i> Ventajas y beneficios 
		 </button>
		  <div id="caja3" class="caja3"> 
		  		<li>Clases adaptadas a sus tiempos</li>
		  		<li>Asesoría especializada</li>
		  		<li>Profesores bilingues</li>
		  		<li>Native Speaker</li>
		  </div>
  	</div>
 
</div>
@include('includes.modulos.index')
@include('includes.nuestra-escuela-online')
</div>
@endsection

