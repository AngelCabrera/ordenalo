@extends('layouts.app')
@section ('content')
@if(Auth::check())
<div class="big-padding text-center blue-grey white-text">
@if(Auth::user()->type != 3) 
	<h1>Mis Órdenes</h1>
@else
	<h1>Órdenes</h1>
@endif
</div>
<div class="container table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Direccion</th>
				<th>Bs.</th>
				<th>Ordenado por:</th>
				<th>Estado de la orden</th>
				<th>Numero de guía</th>
				<th>Detalles de la orden</th>
				@if(Auth::user()->type == 3) 
				<th>Editar</th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach ($orders as $order)
				@if($order->user_id == Auth::user()->id || Auth::user()->type == 3) 
					<tr>
						<td>{{  $order-> id }}</td>
						<td>{{  $order-> line1 }}</td>
						<td>{{  $order-> total }}</td>
						<td>{{  $order-> user->name }}</td>
						<td>{{  $order-> status }}</td>
						<td>{{  $order-> guide_number }}</td>
						<td>
							<a href="{{ url('/orders/'.$order->id) }}">
								Ver más...
							</a>
						</td>
						@if(Auth::user()->type == 3) 
						<td>
							<a href="{{ url('/orders/'.$order->id.'/edit') }}">
								<span class="label label-info">
									<span class="glyphicon glyphicon-wrench">
									</span>
								</span>
							</a>
						</td>
						@endif
					</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
@endif
@endsection