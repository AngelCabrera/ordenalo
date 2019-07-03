@extends('layouts.app')
@section ('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Etiquetas</h1>
</div>

<div class="container">
	<div class="col-md-offset-1 col-md-10">
			{!! Form::open([ 'method' => 'GET', 'url'=>'/tags','class' => 'navbar-form navbar-left', 'role'=>'search']) !!}
			<div class="input-group custom-search-form">
				<input type="text" name="search" class="form-control">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default-sm btn-raised">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>	
			{!! Form::close() !!}
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Etiqueta</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tags as $tag)
						<tr>
							<td>{{  $tag-> id }}</td>
							<td>{{  $tag-> name }}</td>
						<td>
							<a href="{{ url('/tags/'.$tag->id.'/edit') }}">
								<span class="label label-info">
									<span class="glyphicon glyphicon-wrench">
									</span>
								</span>
							</a>
							@include('tags.delete', ['tag'=>$tag])
						</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	</div>
</div>
<div class="floating">
	<a href="{{url('/tags/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection