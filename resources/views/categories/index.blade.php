@extends('layouts.app')
@section ('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Categorias</h1>
</div>
<div class="container">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Categoria</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{  $category-> id }}</td>
					<td>{{  $category-> name }}</td>
				<td>
					<a href="{{ url('/categories/'.$category->id.'/edit') }}">
						<span class="label label-info">
							<span class="glyphicon glyphicon-wrench">
							</span>
						</span>
					</a>
					@include('categories.delete', ['category'=>$category])
				</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="floating">
	<a href="{{url('/categories/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection