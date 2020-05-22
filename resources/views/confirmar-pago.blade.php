@extends('layout.app')
@section('content')
<div class="contenedor">
	<div class="recibo-de-pago">
		
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('img/logo-3.JPG')}}" style="float: left;">
			</div>
			<div class="col-md-6">
				<img src="{{asset('img/logo-importante.JPG')}}" style="float: right; border-radius: 10px;">
			</div>
		</div>
		<hr>
		<h2 class="titulo-curso">{{$titulo}}</h2>
		<img src="{{asset('img/pago-curso.JPG')}}" class="img-pago-curso">
		<p class="precio-curso">$ {{$precio}} CLP por unidad</p>
		<div class="descripcion-curso">
			<strong>Comercio</strong><br>
			<strong>Cantidad disponible</strong> <br>
			<strong>Descripción:</strong> {{$nivel}}
		</div>
		<button class="btn btn-primary">Continuar</button>
	</div>
</div>
@endsection