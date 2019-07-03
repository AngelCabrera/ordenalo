@extends('layouts.app2')
@section ("content")
<div class="container">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin">Editar usuario</div>
		<!--Formulario -->
		@include('auth.form',['user' => $user, 'url' => '/users/'.$user->id, 'method' => 'PATCH'])
	</div>
</div>
@endsection