@extends('layout.app')
@section('content')
<div class="contenedor">

@include('includes.slider')

<div class="modulo">
			<div class="info-modulo">
				<h1>Preliminary - Nivel Intermedio</h1>
				<strong><p class="clasificacion">B1 - B1 +</p></strong>
				<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
				<p>En este módulo el alumno profundiza todas las categorias de habilidades, escencial para una progesión del sistema fonológico, correción sistemática de pronunciación del idioma.</p>
				<h2><i class="fas fa-bullseye"></i> Objetivos del curso</h2>
				<ol>
					<li>Comunicarse en ingles hablado escrito de manera simple pero eficiente.</li>
					<li>Comprender instrucciones rutinarias de la vida diaria.</li>
					<li>Leer libros, articulos, escribir cartas, email.</li>
					<li>Ingles situacional de viaje: Aeropuerto, Inmigración, Hotel, Shopping, Transporte, Direcciones, Modismos, Role Play</li>
					<li>Aprender los principales modos verbales que más se utilizan.</li>
					<li>Dominio de un extenso y bien estructurado vocablos.</li>
				</ol>
				<h2><i class="fab fa-leanpub"></i> Metodología</h2>
				<ol>
					<li>Aprender los pricipales modos verbales que mas se utilizan</li>
					<li>Clases última semana con native speaker, <strong>100% Conversacional</strong> , Clases online</li>
					<li>Clases dinámicas PPP (Presentación, Práctica, Producción)</li>
					<li>Examen final oral y escrito</li>
					<li>Entrega de certificado y diploma online</li>
				</ol>
				<h2><i class="fas fa-user-graduate"></i> Requisitos</h2>
				<ol>
					<li>Los alumnos/as deberan cumplir con el 80% de asistencia a clases online</li>
					<li>Obligación realizar los ejercicios de practicas periodicas de las 4 habilidades en la plataforma online</li>
					<li>Obligación rendir los quiz evaluación de las difenerentes</li>
					<li>Examen final oral y escrito</li>
					<li>Entrega de certificados y diplomas</li>
				</ol>
				
				<h2><i class="far fa-clock"></i> Horarios</h2>
					<p>A elección Lunes, Miercoles o Viernes</p>
				<h2><i class="fas fa-hourglass-half"></i> Duración</h2>
					<p>3 Meses, Total 108 horas pedagógicas</p>
					<a style="margin-bottom: 30px;" href="{{route('confirmarPago',['id' => 2])}}" class="btn boton">¡Inscribete ya!</a>
			</div>

		<img class="logo-right" src="{{asset('img/student2-online.JPG')}}" >
		<img class="logo-right" src="{{asset('img/speaking-airport.JPG')}}" >
</div>

@include('includes.tabla')
@include('includes.nuestra-escuela-online')
</div>

@endsection