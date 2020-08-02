@extends('layout.app')
@section('content')
<div class="contenedor">
	
		<div style="margin-top: 100px;"></div>
	<div class="row">
		<div class="col-md-4">
			<img src="https://www.trecebits.com/wp-content/uploads/2020/03/clases-Online-confinamiento-plataformas-virtuales.jpg" id="img-ventajas">
		</div>
		<div class="col-md-8">
			<h1 class="titulo">Ventajas y beneficios</h1>
		<p class="article">
			Recibirá asesoría académica especializada y aprendizaje garantizado, con profesores bilingues certificados y native speaker, un avance real continuo para lo cual contará con ejercicios prácticos de caracter obligatorio, que son complemento perfecto para las clases en vivo, recuperación y reforzamiento de clases grabadas para su disponibilidad.
			
		</p>
		<h1 class="titulo">Precios </h1>
		<p class="article">
			Precio subvención preferencial 50 % matricula $ 49.900
			tres mensualidades $ 49.900 mas una beca 100% gratis
			para otro alumno, mínimo cursando enseñanza media.
		</p>
		</div>
	</div>
	<div style="margin-bottom: 20px;"></div>
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
		  <img class="card-img-top" src="{{asset('img/student2-online.JPG')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</div>
<div style="margin-bottom: 20px;"></div>

	@include('includes.nuestra-escuela-online')
	
</div>

@endsection