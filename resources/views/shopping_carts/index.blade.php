@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')
<div class="big-padding text-center blue-grey white-text">
	<h1>Mi carrito de compras</h1>
</div>
<div class="container">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>		
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td>{{ $product->title }}</td>
					<td>{{ $product->pricing }}</td>
				</tr>
			@endforeach
			<tr class="	">
				<td><b>Total<b></td>
				<td><b>{{ $total }}<b></td>
			</tr>
		</tbody>
	</table>
	<div class="form-group text-right">
	@if(auth::check())
		<a href="{{url('/pagar') }}"><button type="submit" value="" class="btn btn-raised btn-danger" style="background-color:#c83226;">Ordénalo! <span class="fa fa-motorcycle"></span></button> </a>
	
	@else
		<a href="{{url('/register') }}"><button type="submit" value="" class="btn btn-raised btn-danger" style="background-color:#c83226;">Ordénalo! <span class="fa fa-motorcycle"></span></button> </a>
	@endif	
	</div>
</div>

@endsection
@endsection