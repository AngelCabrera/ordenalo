@extends('layouts.app')
@section ('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Restaurantes</h1>
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
				<th>Restaurant</th>
				<th>Direccion</th>
				<th>Productos</th>
				<th>Email</th>
				<th>Pagina Web</th>
				<th>Telefono</th>
				<th>Rif</th>
				<th>Dueño</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($restaurants as $restaurant)
			@if($restaurant->user_id == Auth::user()->id || Auth::user()->type == 3) 
			<tr>
				<td>{{ $restaurant->id }}</td>
				<td>{{ $restaurant->name }}</td>
				<td>{{ $restaurant->address }}</td>
				<td>{{ $restaurant->description }}</td>
				<td>{{ $restaurant->email }}</td>
				<td>{{ $restaurant->webPage }}</td>
				<td>{{ $restaurant->phone }}</td>
				<td>{{ $restaurant->rif }}</td>
				<td>{{ $restaurant->user->name }}</td>
				@if($restaurant->status == 1)
					<td><span class="label label-success">Abierto</span></td>
				@else
					<td><span class="label label-danger">Cerrado</span></td>
				@endif
				<td>
					<a href="{{ url('/restaurants/'.$restaurant->id.'/edit') }}">
						<span class="label label-info"><span class="glyphicon glyphicon-wrench"></span></span></a>
					@include('restaurants.delete', ['restaurant'=>$restaurant])
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
	{!! $restaurants->render() !!}
</div>
<div class="floating">
	<a href="{{url('/restaurants/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection