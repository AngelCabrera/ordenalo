@extends('layouts.app1')

@section ('content')

	<div class="container white">
		<h1></h1>
		<!--Formulario -->
		@include('orders.form',['order' => $order, 'url' => '/orders', 'method' => 'POST'])
	</div>
@endsection