{!! Form::open(['url' => '/carrito/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<button type="submit" class="btn btn-link red-text no-padding no-margin no-transform" value="Eliar"><span class="label label-danger"><span class="glyphicon glyphicon-remove"></span></span></button>
{!! Form::close() !!}