@extends('layout.app')
@section('content')

<div class="contenedor">
	<h2>Detalle de la venta</h2>
	<p>Usuario :{{$miVenta->user->name.' '.$miVenta->user->surname}}</p>
	<p>Nombre del curso :{{$miVenta->curso->nombreCurso}}</p>
	<p>Valor :$ {{$miVenta->curso->valor}} CLP</p>
	<p>Ubicación :{{$miVenta->region}}</p>
	<p>Comuna :{{$miVenta->comuna}}</p>
</div>
@endsection