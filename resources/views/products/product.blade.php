<div class="card product text-left col-md-8 login">
	
<div class="absolute actions">
	@if(Auth::check())
		@if($product->user_id == Auth::user()->id || Auth::user()->type == 3)
			<a href="{{ url('/products/'.$product->id.'/edit') }}">
				<span class="label label-info"><span class="glyphicon glyphicon-wrench"></span></span></a>
			</a>
			@include('products.delete', ['product'=>$product])
		@endif
	@endif
	@if($product->status == 1)
		<a href="#"><span class="label label-success">Disponible</span></a>
	@else
		<a href="#"><span class="label label-danger">Agotado</span></a>
	@endif
</div>

	<h1>{{ $product->title }}</h1>
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			@if($product->extension)
				<img src="{{ url("/products/images/$product->id.$product->extension") }}" class="product-avatar thumbnail" alt="">
			@endif
		</div>
		<div class="col-sm-8 col-xs-12">
			<div class="col-sm-6 col-xs-12">
				<p>
					<strong>Descripción:</strong>
				</p>
				<p>
					{{ $product->description }}
				</p>
			</div>
			<div class="col-sm-6 col-xs-12">
				<p>
					<strong>Precio:</strong>
				</p>
				<p>
					{{ $product->pricing }} Bs
				</p>
			</div>
			<div class="col-xs-12">
				<p>
					@include("in_shopping_carts.form", ["product"=>$product])
				</p>
			</div>
		</div>
	</div>
</div>