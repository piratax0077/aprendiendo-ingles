@extends('layout.app')
@section('content')

<div class="contenedor">
	@include('includes.message')

	
<?php

	$user = Auth::user();


?>
<div class="jumbotron">
  <h1 class="display-4">Felicidades!</h1>
  <p class="lead">Esta a punto de ingresar al Instituto Profesional de Ingles el cual le entregará todas las herramientas necesarias para que pueda comunicarse usando el idioma Ingles</p>
  <hr class="my-4">
  <p>Muchas gracias por su preferencia</p>
  <img src="{{ asset('img/logo-importante.JPG') }}" class="img-responsive img-thumbnail" style="width: 200px; height: 200px;">
  <img src="{{ asset('img/bandera-usa.JPG') }}" class="img-responsive img-thumbnail" style="width: 200px;">
  <img src="{{ asset('img/logo-4.JPG') }}" class="img-responsive img-thumbnail" style="width: 200px;">
  <img src="{{ asset('img/bandera-chile.JPG') }}" class="img-responsive img-thumbnail" style="width: 200px; height: 200px;">
  <img src="{{ asset('img/student2-online.JPG') }}" class="img-responsive img-thumbnail" style="width: 200px; height: 200px;">
</div>

<div class="form-confirmar-pago">
<form action="{{ route('index') }}"  method="post" class="form-white">
	@csrf
	<h2 class="titulo">Ahora debe ingresar su ubicación</h2>
	<div class="form-group">
		<input type="hidden" name="idModulo" class="form-control" value="{{ $id }}">
		
		<input type="hidden" name="amount" value="{{ $precio }}">
	</div>

	<!--Parte importante -->
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputState">Region</label>
					      <select id="regiones" class="form-control" name="region" required>
					        
					      </select>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputState">Ciudad</label>
					      <select id="comunas" class="form-control" name="comuna" required>
					        
					      </select>
					    </div>
					    </div>
						<!-- Fin parte importante -->
	<input type="submit" name="" class="btn btn-primary" value="Pagar">
</form>
</div>

	
</div>
@endsection