@extends('layouts.app1')

@section ('content')

<div class="container">
	<div class="white login panel panel-danger" id="prueba">
		<div class="panel-heading panel-height panel-margin">Registra tu restaurant</div>
		<!--Formulario -->
		@include('restaurants.form',['restaurant' => $restaurant, 'url' => '/restaurants', 'method' => 'POST'])
	</div>
</div>
@endsection