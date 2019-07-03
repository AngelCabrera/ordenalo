<div class="card product text-left login">

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
		<div class="col-sm-5 col-xs-12">
			@if($restaurant->extension)
					<img src="{{ url("/restaurants/images/$restaurant->id.$restaurant->extension") }}" class="product-avatar thumbnail" alt="">
			@endif
		</div>
		<div class="col-sm-7 col-xs-12" style="line-height: 1;">
			<p>
				<strong>Productos ofrecidos</strong>
			</p>
			<p>
				{{ $restaurant->description }}
			</p>
			<p>
				<strong>Dirección</strong>
			</p>
			<p>
				{{ $restaurant->address }}
			</p>
			<p>
				<strong>Teléfono:</strong>
			</p>
			<p>
				{{ $restaurant->phone }}
			</p>

			@if($restaurant->status == 1)
			<a href="{{ url("/restaurants/$restaurant->id") }}"><button class="btn btn-raised btn-danger" style="background-color: #c83226; width: 100%;">Ver menú</button></a>
			@else
			<a href="{{ url("/restaurants/$restaurant->id") }}"><button class="btn btn-raised btn-danger" style="background-color: #c83226; width: 100%;" disabled>Ver menú</button></a>
			@endif
		</div>
	</div>
</div>