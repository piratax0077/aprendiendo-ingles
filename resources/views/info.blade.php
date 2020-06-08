@extends('layout.app')
@section('content')
<div class="contenedor">
@include('includes.message')
<div style="margin-top: 100px;"></div>
<a href="{{ $url }}" class="btn btn-primary">Pagar</a>

</div>
@endsection