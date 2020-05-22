@extends('layout.app')
@section('content')
<div class="contenedor">
  
  @include('includes.slider')
  <div class="row pl-4">
  	<div class="col-md-4 pt-4 ">
  		<button id="mostrar" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Metodologia online
		 </button>
		 <button id="ocultar" class="btn btn-warning">
			<i class="fas fa-search"></i> Metodologia online
		 </button>
		  <div id="caja" class="caja">
		  	<p>Lo primero es la realización de un quiz seat <strong>(Scholastict English Aptitude Test)</strong>Recibirás una orientación del curso, se explicará las herramientas pedagogicas con metas semanales de aprendizaje. Necesitará de un pc o tablet con internet. Las clases online serán grabadas para su disponibilidad.</p>
		  </div>
  	</div>
  	<div class="col-md-4 pt-4 pl-4">
  		<button id="mostrar-2" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Metodologia nemotecnica
		 </button>
		 <button id="ocultar-2" class="btn btn-warning">
			<i class="fas fa-search"></i> Metodologia nemotecnica
		 </button>
		  <div id="caja2" class="caja2">
		  	<p>
		  		<li>FÁCIL</li>
		  		<li>AMENA</li> 
		  		<li>EFICAZ</li> 
		  	  ES UN CONCEPTO PEDAGÓGICO  ESCENCIAL QUE AYUDA A DESARROLLAR TODAS LAS CATEGORIAS  DE HABILIDADES   PRODUCTIVAS   Y RECEPTIVAS, LISTENIG SPEAKING,  MEJORANDO      ASI  LA CAPACIDAD DE MEMORIZAR, PERMITIENDO  REDUCIR EL STRESS Y LA FATIGA QUE PRODUCE EL APRENDIZAJE DEL IDIOMA  INGLÉS.  AVANCE REAL CONTINUO , ACCESO, USO Y  PRACTICA SEMANAL    DE  CONTENIDOS  ACADÉMICOS.</p>
		  </div>
  	</div>
  <div class="col-md-4 pt-4 pl-4">
  		<button id="mostrar-3" class="btn btn-success ">
		  	<i class="fas fa-search"></i> Ventajas y beneficios
		 </button>
		 <button id="ocultar-3" class="btn btn-warning">
			<i class="fas fa-search"></i> Ventajas y beneficios 
		 </button>
		  <div id="caja3" class="caja3">
		  	<li>RECIBIRA  ASESORÍA ACADÉMICA ESPECIALIZADA Y  APRENDIZAJE GARANTIZADO,CON  PROFESORES  BILINGÜES CERTIFICADOS,  Y NATIVE SPEAKER </li> 
		  		<li>CON UN AVANCE  REAL CONTINUO</li> 
		  		<li>RECUPERACIÓN Y REFORZAMIENTO DE CLASES</li>
		  </div>
  	</div>
 
</div>
</div>

@include('includes.modulos.index')
@endsection