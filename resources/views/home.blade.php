		@extends('layout.app')

		@section('content')

		<div class="contenedor">
			
			@include('includes.slider')
			@include('includes.message')
			<div style="margin-top: 50px;"></div>
	<div class="row" style="margin-bottom: 30px;">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-4">
					<img src="https://blog.funcas.es/wp-content/uploads/2019/01/PEE158_01.jpg" style="width: 275px;">
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
		<div class="row">
			<div class="col-md-8">
			<h2 class="titulo">Como afecta no hablar ingles</h2>
			<p class="article">Estos resultados son desalentadores, solo el <span style="color: red;">32% </span> de los estudiantes de enseñanza media logran o superan el nivel básico A2. Este bajo nivel de inglés previo a los estudios superiores se ve afectado por el cambio de metodología y terminan titulandose sin hablar ingles de manera efectiva.</p>
		</div>
		<div class="col-md-4">
			<img src="{{asset('img/logo-importante.JPG')}}" style="width: 270px;" >
		</div>
		</div>
		
	</div>
	<div class="col-md-3 sidebar">
		<h3 class="titulo">Ultimas entradas</h3>
	</div>
</div>

		
		<div class="row" style="margin-bottom: 30px;">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-4">
					<img src="{{asset('img/student-online.JPG')}}" style="width: 275px;" >
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

		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<h2 class="titulo">Video de bienvenida</h2>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/e7USlGRASOU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>

		
	</div>
		
		
		@endsection
