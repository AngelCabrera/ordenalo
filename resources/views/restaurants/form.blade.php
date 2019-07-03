{!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!} <!--Direccion-->
<div class="panel-body">
	<div class="form-group">
		{{ Form::text('name',$restaurant->name,['class' => 'form-control', 'placeholder' =>'Nombre del restaurante...']) }}
	</div>
	<div class="form-group">
		{{ Form::number('phone',$restaurant->phone, ['class' => 'form-control', 'placeholder' =>'Teléfono del restaurante...' ]) }}
	</div>

	<div class="form-group">
		{{ Form::text('address',$restaurant->address, ['class' => 'form-control', 'placeholder' =>'Direccion...']) }}
	</div>

	<div class="form-group">
		{{ Form::text('email',$restaurant->email, ['class' => 'form-control', 'placeholder' =>'Correo electronico del restaurante...']) }}
	</div>
	<div class="form-group">
		{{ Form::text('webPage',$restaurant->webPage, ['class' => 'form-control', 'placeholder' =>'Pagina Web del Restaurant...']) }}
	</div>
	<div class="form-group">
		{{ Form::text('rif',$restaurant->rif, ['class' => 'form-control', 'placeholder' =>'Rif...']) }}
	</div>
	<div class="form-group">
		{{ Form::textarea('description', $restaurant->description, ['class' => 'form-control', 'placeholder' =>'Ingrese todos los productos que ofrece su restaurant. Ejemplo: Pizzas, Camarones, Hamburguesas...']) }}
	</div>
	<div class="form-group">
	{{ Form::select('status', ['1' => 'Abierto', '2' =>'Cerrado'], $restaurant->status, ['class' => 'form-control moreSize']) }}
</div>

<div class="form-group is-empty is-fileinput">
            {{ Form::file('cover') }}
            <div class="input-group">
              <input type="text" readonly="" class="form-control" placeholder="Sube una imagen de tu restaurant...">
                <span class="input-group-btn input-group-sm">
                  <button type="button" class="btn btn-fab btn-fab-mini">
                    <i class="material-icons">attach_file</i>
                  </button>
                </span>
            </div>
</div>
	<div class="form-group text-right">
		<a href="{{ url('/restaurants') }}"> Regresar al listado de restaurantes</a>
		<input type="submit" value="Enviar" class="btn btn-raised btn-link ">
	</div>
</div>
{!! Form::close() !!}