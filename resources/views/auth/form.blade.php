{!! Form::open(['url' => $url, 'method' => $method]) !!} <!--Direccion-->
<div class="panel-body">
<div class="form-group">
	{{ Form::label('name', 'Nombre')}}
	{{ Form::text('name', $user->name,['class' => 'form-control', 'placeholder' =>'Ingrese un nombre...']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Correo electrónico')}}
	{{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>'Ingrese un correo...']) }}
</div>
<div class="form-group">
	{{ Form::label('address', 'Direccion postal')}}
	{{ Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' =>'Ingrese una dirección...']) }}
</div>
<div class="form-group">
	{{ Form::label('type', 'Tipo')}}
	{{ Form::select('type', ['1' => 'Usuario', '2' =>'Propietario de Restaurant', '3' => 'Administrador'], $user->type, ['class' => 'form-control moreSize']) }}
</div>

<div class="form-group text-right">
	<a href="{{ url('/users') }}">Regresar al listado de usuarios</a>
	<input type="submit" value="Enviar" class="btn btn-raised btn-link ">
</div>
</div>

{!! Form::close() !!}
