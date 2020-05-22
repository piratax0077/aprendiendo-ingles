@extends('layout.app')
@section('content')
<div class="contenedor">
<div class="mision-vision">
	<h2>{{$titulo}}</h2>
	@if(isset($descripcion))
	<p>{{$descripcion}}</p>
	@endif
</div>
	
</div>
@endsection