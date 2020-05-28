@extends('layout.app')
@section('content')
<div class="contenedor">

@include('includes.slider')

	<div class="modulo ">
		<div class="info-modulo">
			<h1>Higher - Nivel avanzado</h1>
			<strong><p class="clasificacion">B2 - B2 +</p></strong>
			<h2><i class="fas fa-chalkboard-teacher"></i> Descripción</h2>
			<p>En este nivel será capaz de comunicarse fluidamente utilizando el ingles como una herramienta eficaz de trabajo.</p>
		<h2><i class="fas fa-bullseye"></i> Objetivos del curso</h2>
		<ol>
			<li>Mejorar de la habilidad linguistica, fonológica y de pronunciación.</li>
			<li>Mejora en la pronunciación.</li>
			<li>Comprensión auditiva.</li>
			<li>Expresión escrita y de lectura</li>
		</ol>
		<h2><i class="fab fa-leanpub"></i> Metodología</h2>
		<ol>
			<li>Clases online con native speaker 100% conversacional</li>
			<li>Modelo de clases dinámicas</li>
			<li>Discusiones grupales,Role play y modismos</li>
			<li>Clases analisis de fonética y pronunciación Discuciones grupales</li>
			<li>Dominio de un extenso y bien estructurado vocablos</li>
			
		</ol>
		<h2><i class="fas fa-user-graduate"></i> Requisitos</h2>
		<p>Personas que hallan terminado su enseñanza media.</p>
		
		<h2><i class="far fa-clock"></i> Horarios</h2>
			<p>A elección Lunes, Miercoles o Viernes</p>
		<h2><i class="fas fa-hourglass-half"></i> Duración</h2>
			<p>3 Meses, Total 108 horas pedagógicas online</p>
			<a href="{{route('confirmarPago',['id' => 3])}}" class="btn boton">¡Inscribete ya!</a>
		</div>
		
		<img class="logo-right" src="{{asset('img/student2-online.JPG')}}" >
		<img class="logo-right" src="{{asset('img/students-online.JPG')}}" >
		
</div>
</div>

@include('includes.tabla')
@include('includes.nuestra-escuela-online')
</div>



@endsection