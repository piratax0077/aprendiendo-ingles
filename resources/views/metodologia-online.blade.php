@extends('layout.app')
@section('content')
<div class="contenedor">
	<div style="margin-top: 100px;"></div>
	<div class="row">
		<div class="col-md-3">
			<img src="{{asset('img/student5-online.JPG')}}" id="img-student-online">
		</div>
		<div class="col-md-9">
			<h1 class="titulo">Metodología Online</h1>
			<p class="article"><strong>Cada vez más personas optan por la metodología de enseñanza online</strong>, principalmente para tener la posibilidad de compaginar su trabajo con la vida académica, pero tambien para estudiar lo que quieran sin tener que desplazarse.</p>
			<p class="article">El e-learning es un método de aprendizaje a través de Internet que ha ido ganando peso durante los últimos años. Tal ha sido su nivel de desarrollo, que <strong>desde el año 2000 la formación online ha crecido un 900% a nivel mundial. </strong></p><hr>
			<p class="article"><strong>English New Deal online (Advance learners program)</strong> cuenta con 3 modulos en 9 niveles.</p> <p class="article">Lo primero es la realización de un quiz seat <strong>(Scholastict English Aptitude Test)</strong>. Recibirás una orientación del curso, se explicará las herramientas pedagogicas con metas semanales de aprendizaje. Necesitará de un pc o tablet con internet. Las clases online serán grabadas para su disponibilidad.</p>

		</div>
	</div>
	<div style="background-color: #eee; height: auto; padding: 20px;font-size: 18px; margin-bottom: 30px;">
		<p>Por último, a todos estos materiales, se le suman casos prácticos que el alumnado tiene que resolver para poner en práctica lo aprendido durante el curso.
		Este tipo de metodología garantiza el éxito en la adquisición de conocimientos.</p>
		<strong>Entre las principales ventajas cabe destacar</strong>
		<ul>
			<li>La compatibilidad con cualquier actividad, eliminando de esta forma las limitaciones de localización, tiempo y/o recursos.</li>
			<li>La aplicación práctica asegura la asimilación de lo aprendido, y motiva la reflexión personal mediante el análisis de la situación planteada y la elaboración de conclusiones.</li>
			<li>Mantiene la atención de los participantes gracias a su sencillez y amenidad, fomentando la interactividad entre alumnos y profesores.</li>
			<li>Garantiza una atención personalizada y permite un seguimiento individualizado mediante un asesor académico a lo largo de todo el programa.</li>
			<li>Permite el acceso inmediato, a través del campus virtual personalizado, a toda la documentación y a los diferentes ejercicios, vídeos, dinámicas y evaluaciones.</li>
			<li>En resumen, se trata de un formato que se adapta a cualquier situación y horario para la adquisición de la formación técnica al más alto nivel.</li>
		</ul>
	</div>
	<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/student2-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/student3-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/student5-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
	
</div>
<div style="margin-bottom: 20px;"></div>
@include('includes.nuestra-escuela-online')
@endsection