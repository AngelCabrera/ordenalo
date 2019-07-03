{!! Form::open(['url' => $url, 'method' => $method]) !!} <!--Direccion-->
<div class="panel-body">
	<div class="form-group">
		
		{{ Form::text('line1',$order->line1,['class' => 'form-control', 'placeholder' =>'Dirección de entrega ...', 'required' => 'required']) }}
	</div>
	<div class="form-group">
		<label for="PaymentMethod"> <span class="fa fa-credit-card"></span> Seleccione el método de pago</label>
		{{ Form::select('PaymentMethod', ['1' => 'Tarjeta de debito', '2' =>'Tarjeta de Crédito', '3' => 'Transferencia'], null ,['class' => 'form-control', 'required' => 'required']) }}
	</div>
	<div class="form-group text-right">
		<a href="{{ url('/products/1') }}"> Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-raised btn-link">
	</div>
</div>
{!! Form::close() !!}