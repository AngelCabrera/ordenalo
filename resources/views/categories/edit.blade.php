@extends('layouts.app2')
@section ('content')
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar categoria</div>
	<!--Formulario -->
	@include('categories.form',['category' => $category, 'url' => '/categories/'.$category->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection