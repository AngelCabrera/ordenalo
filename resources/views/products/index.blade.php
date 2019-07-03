@extends('layouts.app')
@section ('content')
@if(Auth::check())
<div class="big-padding text-center blue-grey white-text">
	<h1>Productos</h1>
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
				<th>Título</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Restaurant</th>
				<th>Creador</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				@if($product->user_id == Auth::user()->id || Auth::user()->type == 3) 
					<tr>
						<td>{{  $product-> id }}</td>
						<td>{{  $product-> title }}</td>
						<td>{{  $product-> description }}</td>
						<td>{{  $product-> pricing }}</td>
						<td>{{  $product-> restaurant->name }}</td>
						<td>{{  $product-> user->name }}</td>
						<td>
							<a href="{{ url("/products/$product->id") }}">Ver</a>
							<a href="{{ url('/products/'.$product->id.'/edit') }}">
								<span class="label label-info">
									<span class="glyphicon glyphicon-wrench">
									</span>
								</span>
							</a>
							@include('products.delete', ['product'=>$product])
						</td>
					</tr>
				@endif

			@endforeach
		</tbody>
	</table>
</div>
<div class="floating">
	<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endif
@endsection