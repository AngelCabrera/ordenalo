@extends('layouts.app1')

@section ('content')

<div class="container">
	<div class="white login panel panel-danger" id="prueba">
		<div class="panel-heading panel-height panel-margin">Nueva Categoria</div>
		<!--Formulario -->
		@include('categories.form',['category' => $category, 'url' => '/categories', 'method' => 'POST'])
	</div>
</div>
@endsection