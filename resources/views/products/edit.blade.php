@extends('layouts.app2')

@section ("content")
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar producto</div>
		<!--Formulario -->
		@include('products.form',['product' => $product, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection