@extends('layout.app')
@section('content')
<div class="contenedor">
	<div class="p-4">
		@if(count($misVentas) == 0)
			<span>No se ha matriculado en ninguno de nuestros modulos</span>
		@else
		<h1 class="titulo">Mis Módulos ({{count($misVentas)}})</h1>
			
		<div class="row">
			@foreach($misVentas as $miCurso)
			@if($miCurso->estado !== "PENDIENTE")
			<div class="col-md-4">
				<div class="card" style="width: 18rem; margin-bottom: 20px;">
					  <img class="card-img-top" src="{{asset('img/bandera-usa.JPG')}}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">{{$miCurso->curso->nombreCurso}}</h5>
					    <p class="card-text">{{\FormatTime::LongTimeFilter($miCurso->created_at)}}</p>
					    <p class="card-text">Su nivel es {{$miCurso->curso->nivel}} </p>
					    <a href="{{route('detalle-venta',['id' => $miCurso->id])}}" class="btn boton" style="margin-left: 1px !important">Ir al detalle</a>
				 	  </div>

				</div>
			</div>
			@endif
			@endforeach
		</div>
	@endif
	</div>

</div>



@endsection