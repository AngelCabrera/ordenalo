@extends('layouts.app1')

@section ('content')

<div class="container">
	<div class="white login panel panel-danger" id="prueba">
		<div class="panel-heading panel-height panel-margin">Nueva etiqueta</div>
		<!--Formulario -->
		@include('tags.form',['tag' => $tag, 'url' => '/tags', 'method' => 'POST'])
	</div>
</div>
@endsection