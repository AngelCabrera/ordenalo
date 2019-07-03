@extends ("layouts.app1")
@section("content")
@if($order->user_id == Auth::user()->id)
	<div class="big-padding text-center blue-grey white-text">
		<h1>Compra completada</h1>
	</div>

	<div class="container">
		<div class="white login panel panel-danger" id="prueba">
			<div class="panel-heading panel-margin hidden-xs">
			<h4><p class="label label-primary"> {{ $order->status }}</p></h4>
				<center>

						<h3>
							TU PAGO FUE PROCESADO 
						</h3>

				</center>
			</div>
			<div class="panel-body">	
				<p><b>Corrobora los detalles de tu orden:</b></p>		
				<div class="row">
					<div class="col-xs-6">Nombre del receptor:</div>
					<div class="col-xs-6">{{ $order->user->name}}</div>
				</div>
				<div class="row">
					<div class="col-xs-6">Dirección:</div>
					<div class="col-xs-6">{{ $order->line1}}</div>
				</div>
				<div class="row hidden-sm hidden-md hidden-lg">
					<div class="col-xs-6">Estado:</div>
					<div class="col-xs-6">
							<span class="label label-default"> {{ $order->status }}</span>
					</div>
				</div>
				<br>	
				<div>
					<p><b>Productos comprados:</b></p>	
				</div>
				@foreach($products as $product)
				<div class="row">
					<div class="col-xs-6">				@if($product->extension)
					<img src="{{ url("/products/images/$product->id.$product->extension") }}" class="product-mini-avatar" alt="">
				@endif{{ $product -> title }}</div>
					<div class="col-xs-6">{{ $product -> pricing }}</div>
				</div>	
				@endforeach
				<hr>	
				<div>
					<div class="col-xs-offset-6"><p><b>Total: {{ $order->total}}</b></p></div>	
				</div>
			</div>
		</div>
	</div>
@endif
@endsection