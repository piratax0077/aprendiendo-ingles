		@extends('layout.app')

		@section('content')

		<div class="contenedor">
			@include('includes.slider')

	<div class="ingles-idioma-universal">

				<img src="https://blog.funcas.es/wp-content/uploads/2019/01/PEE158_01.jpg">
				<h2>Ingles como idioma universal</h2>
				<p >Con mayor cantidad de habitantes no nativos, 1.5 billones de personas (Segunda lengua), prevalece en la cantidad de publicaciones de investigaciones cientificas, libros e internet.</p>
	</div>



	<div class="como-afecta">
				<h2>Como afecta no hablar ingles</h2>
				<img src="{{asset('img/logo-importante.JPG')}}" >
				<p>Estos resultados son desalentadores, solo el <span style="color: red;">32% </span> de los estudiantes de enseñanza media logran o superan el nivel básico A2. Este bajo nivel de inglés previo a los estudios superiores se ve afectado por el cambio de metodología y terminan titulandose sin hablar ingles de manera efectiva.</p>
			</div>


				<div class="responsabilidad-social">
				<img src="{{asset('img/student-online.JPG')}}" >
				<h2>Responsabilidad social</h2>
				<p >Con una firme convicción y concientes de nuestra responsabilidad social, queremos poner al alcance de la comunidad en general, beneficios preferenciales con <span style="color: red; text-decoration: underline;">becas 100%</span> y <span style="color: red; text-decoration: underline;">subvenciones del 75%</span>, para que de esta forma los estudiantes se comuniquen utilizando el idioma ingles como una herramienta altamente competitiva, fundamental para generar más y mejores oportunidades.</p>
			</div>


			<div class="subvencion">
				<h2>Subvenciones</h2>
				<img src="https://conceptodefinicion.de/wp-content/uploads/2015/02/subvenciones.jpg">
				<p>Un elemento de diferenciación del precio real <span style="color: red;">$300.000</span></p>
				<p>Precio subvención preferencial 75%, Matricula <span style="color: red;">$ 49.900</span></p>
			</div>
		</div>
		@endsection
