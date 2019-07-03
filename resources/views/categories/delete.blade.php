{!! Form::open(['url' => '/categories/'.$category->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<button type="submit" class="btn btn-link red-text no-padding no-margin no-transform" value="Eliminar"><span class="label label-danger"><span class="glyphicon glyphicon-remove"></span></span></button>
{!! Form::close() !!}