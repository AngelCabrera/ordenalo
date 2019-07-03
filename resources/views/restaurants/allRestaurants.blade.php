@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')

<div class="container col-md-4 col-lg-3 hidden-sm hidden-xs" style="margin-top: 10px;">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin" style="font-size: 24px;">Busca lo que quieras</div>
			
			<div class="panel-body">
			{!! Form::open([ 'method' => 'GET', 'url'=>'/restaurantes','class' => 'navbar-form navbar-left', 'role'=>'search']) !!}
			<label for="search">Buscar por nombre de comida:</label>
				<div class="input-group custom-search-form">
					<input type="text" name="search" class="form-control" placeholder="" id="ab">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default-sm btn-raised">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			{!! Form::close() !!}
			{!! Form::open([ 'method' => 'GET', 'url'=>'/restaurantes','class' => 'navbar-form navbar-left', 'role'=>'search']) !!}
				<label for="search">Buscar por nombre de restaurante:</label>
				<div class="input-group custom-search-form">
					<input type="text" name="search1" class="form-control" placeholder="" id="ab">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default-sm btn-raised">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			{!! Form::close() !!}
			{!! Form::open([ 'method' => 'GET', 'url'=>'/restaurantes','class' => 'navbar-form navbar-left', 'role'=>'search']) !!}
				<label for="search">Buscar por dirección:</label>
				<div class="input-group custom-search-form">
					<input type="text" name="search2" class="form-control" placeholder="" id="ab">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default-sm btn-raised">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			{!! Form::close() !!}
			</div>	
		
	</div>
		<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin" style="font-size: 24px;">Los favoritos del mes</div>
			
			<div class="panel-body">
			<center>
					<div class="producto prod-first">  
					     <img src="img/hamburguesa.jpg"  class="" alt="">
					     <div class="mask">  
					       <h2>Hamburguesas</h2>  
					       <p>Uno de los auto más esperado en todo el mundo, mil vendidos en preventa</p>
					       <a href="{{ url('/restaurantes?search=hamburguesa') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
					<br>
					<div class="producto prod-first">  
					     <img src="img/piza.jpg"  alt="">
					     <div class="mask">  
					       <h2>Pizzas</h2>  
					       <p>Uno de los auto más esperado en todo el mundo, mil vendidos en preventa</p>
					       <a href="{{ url('/restaurantes?search=Pizzas') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
					<br>
					<div class="producto prod-first">  
					     <img src="img/pollo.jpg"  alt="">
					     <div class="mask">  
					       <h2>Pollo</h2>  
					       <p>Uno de los auto más esperado en todo el mundo, mil vendidos en preventa</p>
					       <a href="{{ url('/restaurantes?search=pollo') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
			</div>
			</center>
			</div>
		
	</div>
	
</div>
<div class="container text-center products-container col-md-8">
	@foreach($restaurants as $restaurant)
	@include("restaurants.restaurant", ["restaurant"=>$restaurant])
	@endforeach
</div>
<div class="col-xs-12" style="margin-bottom: 30px"></div>

@endsection
@endsection