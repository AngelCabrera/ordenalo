@extends('layouts.app')

@section ('content')

<div class="container col-md-6 col-md-offset-3">
	<div class="white login panel panel-danger">
		<div class="panel-body">
		<h2><center>{{ Auth::user()->name }} sólo nos faltan unos detalles para completar su orden</center></h2>
		<!--Formulario -->
		@include('orders.form',['order' => $order, 'url' => '/orders', 'method' => 'POST'])
		</div>
	</div>
</div>
@endsection