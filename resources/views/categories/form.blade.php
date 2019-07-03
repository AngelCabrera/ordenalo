{!! Form::open(['url' => $url, 'method' => $method]) !!} <!--Direccion-->
<div class="panel-body">
<div class="form-group">
	{{ Form::text('name',$category->name,['class' => 'form-control', 'placeholder' =>'Título de la categoria...']) }}
</div>
<div class="form-group text-right">
	<a href="{{ url('/categories') }}"> Regresar al listado de categorias</a>
	<input type="submit" value="Enviar" class="btn btn-raised btn-link ">
</div>
</div>
{!! Form::close() !!}