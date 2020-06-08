@extends('layout.app')
@section('content')

<div class="contenedor">
	<div style="margin-top: 170px;"></div>
	<div class="row">
		<div class="col-md-3">
			<img src="{{asset('img/logo-4.JPG')}}" style="width: 250px;" >
		</div>
		<div class="col-md-9">
			<table class="table" >
				<tr>
					<td>Usuario</td>
					<td>{{$miVenta->user->name.' '.$miVenta->user->surname}}</td>
				</tr>
				<tr>
					<td>Nombre del curso</td>
					<td>{{$miVenta->curso->nombreCurso}}</td>
				</tr>
				<tr>
					<td>Valor</td>
					<td>$ {{$miVenta->curso->valor}} CLP</td>
				</tr>
				<tr>
					<td>Ubicación</td>
					<td>{{$miVenta->region}}</td>
				</tr>
				<tr>
					<td>Comuna</td>
					<td>{{$miVenta->comuna}}</td>
				</tr>
			</table>
			
		</div>
	</div>
	
	
</div>
@endsection