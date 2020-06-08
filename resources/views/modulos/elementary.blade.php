@extends('layout.app')
@section('content')
<div class="contenedor">
@include('includes.slider')
<div class="modulo">
			<div class="info-modulo">
			<h1>Elementary - Nivel Básico</h1>
			<strong><p class="clasificacion">A2 - A2 +</p></strong>
			<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
			<p>Es un método de aprendizaje natural garantizado, de manera rápida, amena y eficaz. Nos permite reducir el estres que produce el aprendizaje del idioma.</p>
			<h2><i class="fas fa-bullseye"></i> Objetivos del módulo</h2>
				<ol>
					<li>Desarrollar todas las categorias de habilidades productivas comunicativas.</li>
					<li>Ingles situacional especifico de viaje</li>
					<li>Dominio de un extenso y bien estructurado vocablos.</li>
					
					<li>Aprender los principales modos verbales.</li>
				</ol>
				<h2><i class="fab fa-leanpub"></i> Metodología</h2>
				<ol>
					<li>Clases ultima semana con native speaker, <strong>100% Conversacional</strong></li>
					<li>Clases dinámicas PPP (Presentación, Practica, Producción)</li>
					<li>Examen final <span style="color: red">oral y escrito</span></li>
					<li><strong>Entrega de certificado y diploma online</strong></li>
				</ol>
			<h2><i class="fas fa-user-graduate"></i> Requisitos</h2>
				<li>Los alumnos/as deberan cumplir con el <strong>80%</strong> de asistencia online.</li>
				<li>Obligación realizar los ejercicios de practicas periodicas de las 4 habilidades en la plataforma online</li>
				<li>Obligación rendir los quiz (evaluación de las diferentes habilidades)</li><br>

			<h2><i class="far fa-clock"></i> Horarios</h2>
				<strong><p>A elección Lunes, Miercoles o Viernes</p></strong>
			<h2><i class="fas fa-hourglass-half"></i> Duración</h2>
				<strong><p>3 Meses - 108 horas pedagógicas</p></strong>
				<a style="margin-bottom: 30px;" href="{{route('confirmarPago',['id' => 1])}}" class="btn boton" id="btnConfirmElementary">¡Inscribete ya!</a>
		</div>
		<img class="logo-right" src="{{asset('img/student3-online.JPG')}}" >
		<img class="logo-right" src="{{asset('img/student2-online.JPG')}}" >
</div>



@include('includes.tabla')	
@include('includes.nuestra-escuela-online')
</div>


@endsection