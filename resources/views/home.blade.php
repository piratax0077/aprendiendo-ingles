		@extends('layout.app')

		@section('content')

		<div class="contenedor">
			
			@include('includes.slider')
			@include('includes.message')
			<div style="margin-top: 50px;"></div>
			<h1>Bienvenido: {{ Auth::user()->name.' '.Auth::user()->surname }}</h1>
			<article class="background-gris"><p>Queremos darle la Bienvenida,  a una nueva y gratificante experiencia como es el Proyecto educativo de inglés conversacional generación bilingüe, cuya finalidad es contribuir y ayudar al alumno/a  alcanzar un nivel de inglés conversacional competente, mediante un  nuevo modelo  de aprendizaje online y  que tendremos el honor de atenderlo.</p>
			<p>Las  demandas de la sociedad globalizada, exigen la integración a los cambios del mundo nuevo que se insertaran en el futuro. Es cada vez más relevante  el manejo de un idioma universal (INGLES) que le permita enfrentar con éxito su participación en la educación superior o en el mundo laboral.</p>
			<p>El compromiso de nuestro personal docente  de manera entusiasta, es priorizar y hacer  hincapié en el desarrollo de las habilidades productivas de las expresiones orales y auditivas, mediante un conjunto de actividades,  uso inteligente y creativo de los recursos tecnológicos actuales, dando rasgos metodológicos  integradores que permitan respuestas satisfactorias y soluciones rápidas a los problemas que se pueda ver enfrentado el alumno/a, en la realización de las   clases  del curso de capacitación de inglés conversacional, bajo el formato modalidad ONLINE.</p>
			<p>INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.p.A.Garantiza  su aprendizaje, si cumple con la exigencia de asistir a sus clases ONLINE,  rigurosamente y sigue de forma imprescindible  cada una de las instrucciones en la   prácticas periódicas de  contenidos académicos, con acceso expedito  a una plataforma educativa online 24/7, como  así mismo   rendir  los  QUIZ Y EXAMENES de las unidades académicas que este comprenda y obtenga calificaciones satisfactorias,  dentro de las normas establecidas por INSTITUTO NACIONAL DE INGLES CONVERSACIONAL. Entregar al final del curso de capacitación bajo el formato modalidad ONLINE, una vez aprobado este por el alumno, un certificado y diploma digital, que así lo acredite (Sin que ello signifique título oficial).</p>
<p>Porque nuestro compromiso es capacitarlo  de manera seria y confiable, fidelizarlo para que sea nuestra mejor publicidad es nuestro propósito. 
</p>
			</article>
<div style="margin-bottom: 40px;"></div>
<div class="row mb-5 p-3">
	<div class="col-md-5">
		<img src="https://images.contentstack.io/v3/assets/blt3db103350eb1264b/blt1f59fba98971af44/5ed82eb598e62f38ec84c83d/shutterstock_699442555.jpg?auto=webp&format=pjpg&quality=80&width=720&height=720&fit=crop" class="img_banner">
	</div>
	<div class="col-md-7">
		<h2>Precios especiales</h2>
		<p>Precio subvención preferencial 50 % matricula $ 49.900 tres mensualidades $49.900 mas una beca 100% </p>
		<p>Por la matricula de un nuevo alumno puede inscribir a dos beneficiarios gratis, con la condicion que mínimo cursando enseñanza media </p>
	</div>
</div>
@include('includes.nuestra-escuela-online')
<div style="margin-top: 30px;"></div>
	<div class="row" style="margin-bottom: 30px">
		<div class="col-md-9">
			<div class="row background-gris" >
				<div class="col-md-4">
					<img src="https://blog.funcas.es/wp-content/uploads/2019/01/PEE158_01.jpg" style="width: 211px;">
				</div>
				<div class="col-md-8">
					<h2 class="titulo">Ingles como idioma universal</h2>
					<p class="article">Con mayor cantidad de habitantes no nativos, 1.5 billones de personas (Segunda lengua), prevalece en la cantidad de publicaciones de investigaciones cientificas, libros e internet.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 sidebar">
				<form method="post" action="">
					<div class="form-group">
						<label for="user" class="titulo" style="font-size: 16px;">Busqueda</label>
						<input type="search" name="search" class="form-control" placeholder="Busqueda">
					</div>					
					<input type="submit" name="" value="enviar" class="btn btn-primary">
				</form>
			
		</div>
	</div>

<div class="row" style="margin-bottom: 30px;">
	<div class="col-md-9">
		<div class="row background-gris">
			<div class="col-md-8">
			<h2 class="titulo">Como afecta no hablar ingles</h2>
			<p class="article">Estos resultados son desalentadores, solo el <span style="color: red;">32% </span> de los estudiantes de enseñanza media logran o superan el nivel básico A2. Este bajo nivel de inglés previo a los estudios superiores se ve afectado por el cambio de metodología y terminan titulandose sin hablar ingles de manera efectiva.</p>
		</div>
		<div class="col-md-4">
			<img src="{{asset('img/logo-importante.JPG')}}" style="width: 211px;" >
		</div>
		</div>
		
	</div>
	<div class="col-md-3 sidebar">
		<h3 class="titulo">Ultimas entradas</h3>
	</div>
</div>

		
		<div class="row" style="margin-bottom: 30px;">
			<div class="col-md-9">
				<div class="row background-gris">
					<div class="col-md-4">
					<img src="{{asset('img/responsabilidad-social.JPG')}}" style="width: 204px;" >
				</div>
				<div class="col-md-8">
					<h2 class="titulo">Responsabilidad social</h2>
					<p class="article">Con una firme convicción y concientes de nuestra responsabilidad social, queremos poner al alcance de la comunidad en general, beneficios preferenciales con <span style="color: red; text-decoration: underline;">becas 100%</span> y <span style="color: red; text-decoration: underline;">subvenciones del 75%</span>, para que de esta forma los estudiantes se comuniquen utilizando el idioma ingles como una herramienta altamente competitiva, fundamental para generar más y mejores oportunidades.</p>
				</div>
				</div>
			</div>
			
				<div class="col-md-3 sidebar">
					<h3 class="titulo" >Categorias</h3>
					<ul>
						<li><a href="#">Principiante</a></li>
						<li><a href="#">Intermedio</a> </li>
						<li><a href="#">Avanzado</a></li>
					</ul>
				</div>
			
		</div>
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e7USlGRASOU" allowfullscreen></iframe>
</div>

		
	</div>
		
		
		@endsection
