@extends('layouts.app1')
@section('content')
<div class="card product1 text-left login col-xs-12">
		<div class="absolute actions">
		@if(Auth::check())
		@if($restaurant->user_id == Auth::user()->id || Auth::user()->type == 3)
			
				<a href="{{ url('/restaurants/'.$restaurant->id.'/edit') }}">
					<span class="label label-info"><span class="glyphicon glyphicon-wrench"></span></span></a>
				@include('restaurants.delete', ['restaurant'=>$restaurant])
		@endif
		@endif
			@if($restaurant->status == 1)
				<a href="#"><span class="label label-success">Abierto</span></a>
			@else
				<a href="#"><span class="label label-danger">Cerrado</span></a>
			@endif
	</div>
	<h1 style="padding-left: 10px;">{{ $restaurant->name }}</h1>
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			@if($restaurant->extension)
					<img src="{{ url("/restaurants/images/$restaurant->id.$restaurant->extension") }}" class="product-avatar1 thumbnail" alt="">
			@endif
		</div>
		<div class="col-sm-8 col-xs-12" style="">
			<div class="col-sm-6 col-xs-12">
			<p>
				<strong>Productos ofrecidos</strong>
			</p>
			<p>
				{{ $restaurant->description }}
			</p>
			</div>
			<div class="col-sm-6 col-xs-12">
			<p>
				<strong>Dirección</strong>
			</p>
			<p>
				{{ $restaurant->address }}
			</p>
			</div>
			<div class="col-sm-6 col-xs-12">
			<p>
				<strong>Teléfono:</strong>
			</p>
			<p>
				{{ $restaurant->phone }}
			</p>
			</div>
			<div class="col-sm-6 col-xs-12">
			<p>
				<strong>Página Web:</strong>
			</p>
			<p>
				{{ $restaurant->webPage }}
			</p>
			</div>

			<a href="#"><button class="btn btn-raised btn-danger" style="background-color: #c83226; width: 100%;">Opiniones</button></a>
		</div>
	</div>
</div>
<div class="container col-md-4 col-lg-3 hidden-sm hidden-xs" style="margin-top: 20px;">
	<div class="white login panel panel-danger">
		<div class="panel-heading panel-height panel-margin" style="font-size: 24px;">Encuentra Tu Producto</div>
			
			<div class="panel-body">

			<label for="search">Buscar por nombre del producto:</label>
				<div class="input-group custom-search-form">
					<input type="text" name="search" class="form-control" placeholder="" id="ab">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default-sm btn-raised">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>

		
				<label for="search">Buscar por precio:</label>
				<div class="input-group custom-search-form">
					<input type="text" name="search1" class="form-control" placeholder="" id="ab">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default-sm btn-raised">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</div>	
		
	</div>
</div>
<div class="container text-center col-md-8">
	@foreach($products as $product)
		@if($product->restaurant_id == $restaurant->id)

				@include("products.product", ["product"=>$product])

		@endif
	@endforeach
</div>
@endsection