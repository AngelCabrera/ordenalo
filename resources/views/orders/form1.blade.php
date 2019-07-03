{!! Form::open(['url' => $url, 'method' => $method]) !!} <!--Direccion-->
<div class="panel-body">
	<div class="form-group">
		<label for="line1">Dirección de entrega <span class="fa fa-address-card-o"> </span></label>
		{{ Form::text('line1',$order->line1,['class' => 'form-control', 'placeholder' =>'...', 'required' => 'required']) }}
	</div>
	<div class="form-group">
		<label for="status">Estado de la orden <span class="fa fa-hourglass-half"> </span></label>
		{{ Form::text('status',$order->status,['class' => 'form-control', 'placeholder' =>'...', 'required' => 'required']) }}
	</div>
	<div class="form-group">
		<label for="guide_number">Número de guía <span class="fa fa-tag"> </span></label>
		{{ Form::text('guide_number',$order->guide_number,['class' => 'form-control', 'placeholder' =>'...']) }}
	</div>
	<div class="form-group text-right">
		<a href="{{ url('/orders') }}"> Regresar al listado de órdenes</a>
		<input type="submit" value="Enviar" class="btn btn-raised btn-link">
	</div>
</div>
{!! Form::close() !!}