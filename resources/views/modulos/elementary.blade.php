@extends('layout.app')
@section('content')
<div class="contenedor">
@include('includes.slider')
<div class="row">
	<div class="col-md-6 info-modulo-boton">
		<div class="info-modulo">
			<h1>Elementary - Nivel Básico</h1>
			<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
			<p>Es un método de aprendizaje natural garantizado, de manera rápida, amena y eficaz. Nos permite reducir el estres que produce el aprendizaje del idioma. Clases dinámicas PPP (Presentación, Practica y Producción).</p>
			<h2><i class="fas fa-bullseye"></i> Objetivos del curso</h2>
				<ol>
					<li>Desenvolverse con expresiones y frases cotidianas, de la vida diaria</li>
					<li>Comprender instrucciones rutinarias.</li>
					<li>Desarrollar todas las categorias de habilidades productivas expresivas.</li>
					<li>Comunicarse de manera elemental y sin contratiempos</li>
					<li>Aprender los principales modos verbales.</li>
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
		<a href="{{route('confirmarPago',['id' => 1])}}" class="btn boton" id="">¡Inscribete ya!</a>
	</div>
	<div class="col-md-6">
		@include('includes.modulos.links')
	</div>
</div>	
@include('includes.nuestra-escuela-online')
</div>


@endsection