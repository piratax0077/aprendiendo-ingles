@extends('layout.app')
@section('content')
<div class="contenedor">
		@include('includes.slider')
		<h2 class="titulo">Scholastic English Aptitude Test</h2>
		<h3>Description</h3>
		<p style="transition: 0.8s;">El SAT, anteriormente conocido como la Prueba de Aptitud Académica o la Prueba de Logro Escolar, es una prueba estandarizada diseñada para medir las habilidades importantes requeridas para el éxito académico a nivel terciario. Administrado por el College Board en los Estados Unidos, el SAT es un examen estandarizado que generalmente toman los estudiantes de secundaria y preparatoria en preparación para ingresar a colegios y universidades </p>
		<p style="transition: 0.8s;"> El College Board revisó y rediseñó el SAT para alinearlo más estrechamente con el trabajo que realizan los estudiantes de secundaria en el aula y crear pruebas que tendrían sentido en un mundo donde las habilidades para resolver problemas, la comunicación clara y la comprensión de relaciones complejas se han convertido en componentes clave para el éxito en la carrera y en la vida. En la primavera de 2016, la suite de evaluaciones SAT revisada se administró por primera vez en los Estados Unidos e internacionalmente, que comprende SAT Math y SAT Reading and Writing Reading and Writing (ERW). En promedio, el examen toma alrededor de 3–4 h para completar con 50 minutos adicionales para el SAT con ensayo. El examen revisado ya no penaliza a los estudiantes por respuestas incorrectas o adivinanzas, y la escala de 1600 puntos, que incluye sub-puntajes y puntajes de pruebas cruzadas, proporciona información sobre las fortalezas y debilidades específicas de un estudiante, lo que permite a los educadores ajustar la instrucción según sea necesario. Mejorando la accesibilidad para diversas poblaciones, el College Board también estableció nuevas asociaciones con proveedores líderes en línea que ofrecen problemas de práctica y videos instructivos para ayudar a los estudiantes a prepararse (consulte también <a  href="http://www.colegeboard.com/about/index/html" target="_blank">http://www.colegeboard.com/about/index/html</a> ).</p>
		<div class="row">
			<div class="col-md-6">
			<form method="POST" action="#" id="form-quiz">
			
			<div class="preguntas">
			<p class="article">¿Ha realizado un curso de ingles intensivo previamente?</p>
			<div class="form-check">
	  			<input class="form-check-input" type="radio" name="question1" id="exampleRadios1" value="si" checked>
	  			<label class="form-check-label" for="exampleRadios1">
			    Si
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="question1" id="exampleRadios2" value="no">
			  <label class="form-check-label" for="exampleRadios2">
			    No
			  </label>
			</div>
			</div>
			<div class="preguntas">
				<p class="article">¿Maneja el verbo to be?</p>
				<div class="form-check">
		  			<input class="form-check-input" type="radio" name="question2" id="exampleRadios3" value="si">
		  			<label class="form-check-label" for="exampleRadios1">
				    Si
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="question2" id="exampleRadios4" value="no">
				  <label class="form-check-label" for="exampleRadios2">
				    No
				  </label>
				</div>
			</div>

			<div class="preguntas">
				<p class="article">¿Ha estado en Estados Unidos?</p>
				<div class="form-check">
		  			<input class="form-check-input" type="radio" name="question3" id="exampleRadios5" value="si" >
		  			<label class="form-check-label" for="exampleRadios1">
				    Si
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="question3" id="exampleRadios6" value="no">
				  <label class="form-check-label" for="exampleRadios2">
				    No
				  </label>
				</div>
			</div>

			<div class="preguntas">
				<p class="article">¿Le gusta el idioma Ingles?</p>
					<div class="form-check">
					  	<input class="form-check-input" type="radio" name="question4" value="si" >
					  	<label class="form-check-label" for="exampleRadios1">
							Si
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="question4" value="no">
						<label class="form-check-label" for="exampleRadios2">
							    No
						</label>
					</div>
			</div>

			<input type="submit" value="Evaluar" class="btn boton" id="btnRecomendation">
		</form>
			</div>
			<div class="col-md-6">
				<div id="recomendation">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="{{asset('img/bandera-usa.JPG')}}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><span class="resultModulo"></span></h5>
					    <p class="card-text">El módulo recomendado para comenzar sus clases es <span class="resultModulo"></span> ya que su nivel de respuestas fue del <strong id="resultado"  style="color: red;"></strong>.</p>
					    <a id="redirection" href="{{route('higher')}}" class="btn btn-primary">Inscribirse ya</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
		@include('includes.nuestra-escuela-online')
</div>
@endsection