@extends('layouts.app2')

@section ("content")
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar tag</div>
	<!--Formulario -->
	@include('tags.form',['tag' => $tag, 'url' => '/tags/'.$tag->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection