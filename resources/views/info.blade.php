@extends('layout.app')
@section('content')
<div class="contenedor">
@include('includes.message')
<div style="margin-top: 100px;"></div>
<h1 class="titulo">Datos a enviar a PagoFacil</h1>
<strong>Proceso para realizar la transaccion</strong>
<div class="form-group">
	<label for="name">Nombre del Alumno</label>
	<input type="text" name="name" class="form-control" value="{{ $user->name.' '.$user->surname }}" readonly>
</div>
<div class="form-group">
	<label for="name">Módulo</label>
	<input type="text" name="name" class="form-control" value="{{ $modulo }}" readonly>
</div>
<div class="form-group">
	<label for="amount">Monto de la matricula</label>
	<input type="number" name="amount" class="form-control" value="{{ $amount }}" readonly>
</div>
<div class="form-group">
	<label for="idTrx">Id de la transacción</label>
	<input type="text" name="idTrx" class="form-control" value="{{ $idTrx }}" readonly>
</div>

<a href="{{ $url }}" class="btn btn-primary">Pagar</a>

</div>
@endsection