{!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', "class"=>"add-to-cart inline-block" ]) !!} <!--Direccion-->
<div class="form-group">
	<input type="hidden" name="product_id" value="{{ $product->id }}">
</div>
@if($product->status == 1)
	<div class="form-group text-right">
		<input type="submit" value="Agregar al Carrito" class="btn btn-raised btn-default">
	</div>
@else
	<div class="form-group text-right">
		<input type="submit" value="Agregar al Carrito" class="btn btn-raised btn-default" disabled>
	</div>
@endif
{!! Form::close() !!}