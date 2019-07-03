@extends('layouts.app')
@section ('content')
<div class="content big-padding text-center blue-grey white-text">
	<h1>Usuarios</h1>
</div>
<div class="container-fluid">
	@if(session('success'))
		<div class="alert alert-success white-text">
			<h4><span class="material-icons">check_circle</span>
			 {{ session('success') }}</h4>
		</div>
	@endif

</div>
<div class="container-fluid table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Dirección</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->address }}</td>
				<td>
					@if($user->type=="1")<span class="label label-primary">Usuario</span> 
					@endif
					@if($user->type=="2")<span class="label label-success">Propietario de Restaurant</span> 
					@endif
					@if($user->type=="3")<span class="label label-danger">Administrador</span> 
					@endif
				</td>
				<td>
					<a href="{{ url('/users/'.$user->id.'/edit') }}">
						<span class="label label-info">
							<span class="glyphicon glyphicon-wrench"></span>
						</span>
					</a>
					@include('auth.delete', ['user'=>$user])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		{!! $users->render() !!}
</div>


@endsection