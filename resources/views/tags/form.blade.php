{!! Form::open(['url' => $url, 'method' => $method]) !!} <!--Direccion-->
<div class="panel-body">
<div class="form-group">
	{{ Form::text('name',$tag->name,['class' => 'form-control', 'placeholder' =>'Título de la etiqueta...']) }}
</div>

<div class="form-group text-right">
	<a href="{{ url('/tags') }}"> Regresar al listado de tags</a>
	<input type="submit" value="Enviar" class="btn btn-raised btn-link">
</div>
</div>
{!! Form::close() !!}