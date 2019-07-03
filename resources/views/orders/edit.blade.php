@extends('layouts.app2')
@section ("content")
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar orden</div>
		<!--Formulario -->
		@include('orders.form1',['order' => $order, 'url' => '/orders/'.$order->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection