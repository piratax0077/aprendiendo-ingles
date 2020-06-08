@extends('layout.app')
@section('content')

<div class="contenedor">
	@include('includes.message')
	<div class="recibo-de-pago">
		<div class="row">
			<div class=" col-sm-12 col-md-6">
				<img src="{{asset('img/logo-4.JPG')}}" style="float: left; width: 170px; height: 140px;">
			</div>
			<div class="col-sm-12 col-md-6">
				<img src="{{asset('img/logo-importante.JPG')}}" style="float: right; border-radius: 10px;">
			</div>
		</div>
		<hr>
		
		<h2 class="titulo-curso">{{$titulo}}</h2>
		<img src="{{asset('img/pago-curso.JPG')}}" class="img-pago-curso">
		<p class="precio-curso">$ {{$precio}} CLP valor matricula</p>
		<div class="descripcion-curso col-sm-4">
			<strong>Comercio</strong><br>
			<strong>Cantidad disponible</strong> <br>
			<strong>Descripción:</strong> {{$nivel}}
		</div>
		
		
		
	</div>
	
<?php

	$user = Auth::user();


?>
<div class="form-confirmar-pago">
<form action="{{ route('index') }}"  method="post" class="form-white">
	@csrf
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