@extends('layouts.app2')
@section ('content')
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar Restaurant</div>
		<!--Formulario -->
		@include('restaurants.form',['restaurant' => $restaurant, 'url' => '/restaurants/'.$restaurant->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection