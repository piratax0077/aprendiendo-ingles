@extends('layout.app')
@section('content')
<div class="contenedor">
	@include('includes.slider')
	<div class="mt-3"></div>
	<div class="row">
		<div class="col-md-2">
			<img src="{{asset('img/vision.JPG')}}" style="width: 200px; border-radius: 10px;">
		</div>
		<div class="col-md-10">
			<h1>Visión</h1>
	<p>
		En el contexto de una sociedad globalizada del siglo XXI, el dominio del idioma universal inglés, es escencial para el desarrollo de un país. Hablar inglés, se hace cada vez mes relevante. Les permitirá abrir puertas y enfrentar con éxito su participación en el mundo que se insertarán en el futuro laboral o estudios superiores.
	</p>
		</div>
	</div>
	
		
	
</div>
@endsection