@extends('layout.app')
@section('content')
<div class="contenedor">

	
<div class="row" style="background-color: #000; color: white;">
	<div class="col-md-6 info-modulo-boton">
		<div class="info-modulo">
			<h1>Preliminary - Nivel Intermedio</h1>
			<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
			<p>En este módulo el alumno profundiza todas las categorias de habilidades, escencial para una progesión del sistema fonológico, correción de pronunciación del idioma.</p>
		<h2><i class="fas fa-bullseye"></i> Objetivos del curso</h2>
		<ol>
			<li>Comunicarse en ingles hablado escrito de manera preliminar pero eficiente.</li>
			<li>Comprender instrucciones rutinarias.</li>
			<li>Leer libros, articulos, escribir cartas, email.</li>
			<li>Situación de viaje: Aeropuerto, inmigración, hotel, shopping</li>
			<li>Dominio de una extensa y bien estructurada variedad de vocablos.</li>
		</ol>
		<h2><i class="fab fa-leanpub"></i> Metodología</h2>
		<ol>
			<li>Clases native speaker 100% conversacional</li>
			<li>Clases online</li>
			<li>Examen final</li>
		</ol>
		<h2><i class="fas fa-user-graduate"></i> Requisitos</h2>
		<p>Personas que hallan terminado su enseñanza media.</p>
		<h2><i class="far fa-clock"></i> Horarios</h2>
		</div>
		<a href="{{route('confirmarPago',['id' => 2])}}" class="btn boton">¡Inscribete ya!</a>
	</div>

	<div class="col-md-6">
		@include('includes.modulos.links')
	</div>
</div>

</div>



@endsection