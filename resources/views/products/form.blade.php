{!! Form::open(['url' => $url, 'method' => $method, 'files' => true])!!} <!--Direccion-->
<div class="panel-body">
	<div class="form-group">
		{{ Form::text('title',$product->title,['class' => 'form-control', 'placeholder' =>'Título del producto...']) }}
	</div>
	<div class="form-group">
		{{ Form::number('pricing',$product->pricing, ['class' => 'form-control', 'placeholder' =>'Precio del producto en Bs...']) }}
	</div>
	<div class="form-group">
	{{ Form::select('status', ['1' => 'Disponible', '2' =>'Agotado'], $product->status, ['class' => 'form-control moreSize']) }}
	</div>
	<div class="form-group">
		{{ Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' =>'Ingrese una descripción para el producto...']) }}
	</div>
	<div class="form-group is-empty is-fileinput">
	    {{ Form::file('cover') }}
	    <div class="input-group">
	      <input type="text" readonly="" class="form-control" placeholder="Sube una imagen de tu producto...">
	        <span class="input-group-btn input-group-sm">
	          <button type="button" class="btn btn-fab btn-fab-mini">
	            <i class="material-icons">attach_file</i>
	          </button>
	        </span>
	    </div>
	</div>
	<div class="form-group text-right">
		<a href="{{ url('/products') }}"> Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-raised btn-link">
	</div>
</div>
{!! Form::close() !!}