@extends('layout.app')
@section('content')
<div class="contenedor">

@include('includes.slider')
<div class="row" >
	<div class="col-md-6 info-modulo-boton">
		<div class="info-modulo">
			<h1>Higher - Nivel avanzado</h1>
			<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
			<p>En este nivel será capaz de comunicarse fluidamente utilizando el ingles como una herramienta eficaz de trabajo.</p>
		<h2><i class="fas fa-bullseye"></i> Objetivos del curso</h2>
		<ol>
			<li>Mejora de la habilidad linguistica fonológica.</li>
			<li>Mejora en la pronunciación.</li>
			<li>Comprensión auditiva.</li>
			<li>Expresion escrita y de lectura</li>
			<li>Dominio de un extenso y bien estructurado vocablos.</li>
		</ol>
		<h2><i class="fab fa-leanpub"></i> Metodología</h2>
		<ol>
			<li>Clases native speaker 100% conversacional</li>
			<li>Modelo de clases dinámicas</li>
			<li>Role play</li>
			<li>Discuciones grupales</li>
			<li>Clases online</li>
			<li>Examen final</li>
		</ol>
		<h2><i class="fas fa-user-graduate"></i> Requisitos</h2>
		<p>Personas que hallan terminado su enseñanza media.</p>
		<h2><i class="far fa-clock"></i> Horarios</h2>
		</div>
		<a href="{{route('confirmarPago',['id' => 3])}}" class="btn boton">¡Inscribete ya!</a>
	</div>
	<div class="col-md-6">
		
		@include('includes.modulos.links')
	</div>
</div>
@include('includes.nuestra-escuela-online')
</div>



@endsection