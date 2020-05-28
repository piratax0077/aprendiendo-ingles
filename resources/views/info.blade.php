@extends('layout.app')
@section('content')
<div class="contenedor">
@include('includes.message')
<div class="mision-vision">
	<h2>Cuestionario</h2>
	<p><strong>{{$nombre.' '.$apellido.' de la ciudad de '.$comuna.' perteneciente a la '.$region}}</strong> su postulación al curso de su interés se hizo de forma correcta. Si usted obtiene la beca (Valor del curso: $ {{$valor}}, con beca paga ${{$valor/4}} único pago) un coordinador se comunicará vía mail, llamado telefónico o whatsaap y le indicará los pasos a seguir para formalizar su matrícula.

Agradeciendo su interés

Se despide

Becas Chile Capacitación Laboral

Rut: 76.926.273-3</p>
<a href="{{route('home')}}" class="btn btn-primary">Volver al inicio</a>	
</div>

</div>
@endsection