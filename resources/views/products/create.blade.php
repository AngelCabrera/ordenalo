@extends('layouts.app1')

@section ('content')
<div class="container">
	<div class="white login panel panel-danger" id="prueba">
		<div class="panel-heading panel-height panel-margin">Registra tu producto</div>
		<!--Formulario -->
		@include('products.form',['product' => $product, 'url' => '/products', 'method' => 'POST'])
	</div>
</div>	
@endsection
