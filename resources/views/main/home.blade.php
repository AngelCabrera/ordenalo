@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')

    <header id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slideshow/pizza1.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slideshow/pastas2.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slideshow/Hamburguesa.jpg');"></div>
            </div>
        </div>
    </header>
	
	<div id="containerform" class="col-xs-12 hidden-xs">
		<div class="col-sm-3 hidden-xs"></div>
		{!! Form::open([ 'method' => 'GET', 'url'=>'/restaurantes','class' => 'form-inline', 'role'=>'search']) !!}
			<div class="form-group col-xs-9 hidden-sm hidden-md hidden-lg">
				<div class="">
					<input type="text" class="form-control" id="b1" placeholder="¿Qué desea comer?" name="search" style="height: 50px;">
				</div>
			</div>	
			<div class="form-group col-sm-5 hidden-xs">
				<div class="">
					<input type="text" class="form-control" id="b" placeholder="¿Qué desea comer?" name="search">
				</div>
			</div>		
			<div class="hidden-xs col-sm-2">
				<button type="submit" id="buscar" class="btn btn-raised btn-danger btn-lg btn-responsive" style="white-space:normal">
					<span class="glyphicon glyphicon-search hidden-lg hidden-md" aria-hidden="true"></span>
					<span class="hidden-sm hidden-xs"><b>Buscar</b></span>
				</button>
			</div>
			<div class="col-xs-1 hidden-sm hidden-md hidden-lg">
				<button type="submit" id="buscar" class="btn btn-raised btn-danger btn-lg btn-responsive" style="white-space:normal; height: 50px;">
					<span class="glyphicon glyphicon-search hidden-lg hidden-md" aria-hidden="true"></span>
					<span class="hidden-sm hidden-xs"><b>Buscar</b></span>
				</button>
			</div>

		{!! Form::close() !!}
	</div>
	<div id="containerform1" class="col-xs-12 hidden-md hidden-lg hidden-sm">
		<div class="col-sm-3 hidden-xs"></div>
		{!! Form::open([ 'method' => 'GET', 'url'=>'/restaurantes','class' => 'form-inline', 'role'=>'search']) !!}
			<div class="form-group col-xs-9 hidden-sm hidden-md hidden-lg">
				<div class="">
					<input type="text" class="form-control" id="b1" placeholder="¿Qué desea comer?" name="search" style="height: 50px;">
				</div>
			</div>	
			<div class="form-group col-sm-5 hidden-xs">
				<div class="">
					<input type="text" class="form-control" id="b" placeholder="¿Qué desea comer?" name="search">
				</div>
			</div>		
			<div class="hidden-xs col-sm-2">
				<button type="submit" id="buscar" class="btn btn-raised btn-danger btn-lg btn-responsive" style="white-space:normal">
					<span class="glyphicon glyphicon-search hidden-lg hidden-md" aria-hidden="true"></span>
					<span class="hidden-sm hidden-xs"><b>Buscar</b></span>
				</button>
			</div>
			<div class="col-xs-1 hidden-sm hidden-md hidden-lg">
				<button type="submit" id="buscar" class="btn btn-raised btn-danger btn-lg btn-responsive" style="white-space:normal; height: 50px;">
					<span class="glyphicon glyphicon-search hidden-lg hidden-md" aria-hidden="true"></span>
					<span class="hidden-sm hidden-xs"><b>Buscar</b></span>
				</button>
			</div>

		{!! Form::close() !!}
	</div>
	<br>
	<div class="container hidden-sm hidden-xs">
		<center><h4 style="color:#424242; font-size: 45px;">¿Aún no decides que comer?</h4>
		<h4 style="color:#424242; font-size: 40px;">Puedes dar un paseo por nuestras categorías favoritas</h4>
		<i class="fa fa-ellipsis-h" style="font-size:25px;" aria-hidden="true"></i></center>
	</div>
	<div class="container hidden-lg hidden-md">
		<center><h3 style="color:#424242;">¿Aún no decides que comer?</h3>
		<h3 style="color:#424242;">Puedes dar un paseo por nuestras categorías favoritas</h3>
		<i class="fa fa-ellipsis-h" aria-hidden="true"></i></center>
	</div>

	<div class="container hidden-xs">
		<div class="row" id="categoria">	
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
				<div class="producto prod-first">  
				     <img src="img/piza.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pizzas</h2>  
				       <p>Una de las categorías más buscadas, te ofrecemos una gran variedad de pizzas, en diferentes locaciones</p>
				       <a href="{{ url('/restaurantes?search=Pizzas') }}" class="info">Ver categoría</a>  
				     </div>  
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="producto prod-first">  
					     <img src="img/helado.jpg"  alt="">
					     <div class="mask">  
					       <h2>Helados</h2>  
					       <p>¿Buscas deleitar tu paladar con algo frío? Te ofrecemos una lista de los sitios con los mejores helados de la ciudad		</p>
					       <a href="{{ url('/restaurantes?search=helado') }}" class="info">Ver categoría</a>  
					     </div>  
					 </div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="producto prod-first">  
					     <img src="img/hamburguesa.jpg"  class="" alt="">
					     <div class="mask">  
					       <h2>Hamburguesas</h2>  
					       <p>Junto a la pizza conforman el clásico de la comida a domicilio, aquí puedes conseguir esa hamburguesa que te hace agua la boca</p>
					       <a href="{{ url('/restaurantes?search=hamburguesa') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
			</div>

			<div class="col-xs-12 col-sm-4 col-lg-3 hidden-md hidden-sm">
			  <div class="producto prod-first">  
			     <img src="img/postre.jpg"  alt="">
			     <div class="mask">  
			       <h2>Postres</h2>  
			       <p>Solo con mirar los postres que te ofrecemos podrás endulzar tu mente, no dejes de revisar nuestra categoría y endulza tu día</p>
			       <a href="{{ url('/restaurantes?search=postre') }}" class="info">Ver categoría</a>
			     </div>  
			  </div>
			</div>
		</div>
	<div class="">
		<center><h4 style="color:#424242; font-size: 35px; margin-top:30px;">Tenemos aún más...</h4>
	</div>

		<div class="row" id="categoria">

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
				<div class="producto prod-first">  
				     <img src="img/pastas.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pastas</h2> 
				       <p>¿Buscas un plato fuerte? Esta categoría te ofrece todas las bondades de una comida deliciosa, no esperes y descubre nuestra diversidad de pastas</p>					
				       <a href="{{ url('/restaurantes?search=pastas') }}" class="info">Ver categoría</a> 
				     </div>  
				 </div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="producto prod-first">  
					     <img src="img/ensalada.jpg"  alt="">
					     <div class="mask">  
					       <h2>Ensaladas</h2>  
					       <p>Tú, amante de lo natural, de lo saludable, ésta es tu categoría. Tenemos desde las ensaladas más ligeras, hasta las más producidas</p>
					       <a href="{{ url('/restaurantes?search=ensalada') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
			</div>

			<div class="col-sm-4 col-md-4 col-lg-3">
				<div class="producto prod-first">  
				     <img src="img/pollo.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pollo</h2>  
				       <p>¿Te vas a resistir a este gran sabor? Sólo entra y encontrarás los mejores pollos de la ciudad</p>
				       <a href="{{ url('/restaurantes?search=pollo') }}" class="info">Ver categoría</a>  
				     </div>  
				</div>
			</div>
			<div class="col-xs-12  hidden-md hidden-sm col-md-4 col-lg-3">
					<div class="producto prod-first">  
					     <img src="img/sopa.jpg"  alt="">
					     <div class="mask">  
					       <h2>Sopas</h2>  
					       <p>No podía faltar un clásico en nuestra ciudad, aquí encontrarás sopas al estilo local, nacional e internacional</p>
					       <a href="{{ url('/restaurantes?search=sopa') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
			</div>
		</div>
	</div>

	<!-- akdahjfshasjfhkjsfa -->
	<div class="container hidden-sm hidden-md hidden-lg">
		<div class="row" id="categoria">	
			<div class="col-xs-12" style="margin-bottom: 10px;">
				<div class="producto prod-first">  
				     <img src="img/piza.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pizzas</h2>  
				       <p>Una de las categorías más buscadas, te ofrecemos una gran variedad de pizzas, en diferentes locaciones</p>
				       <a href="{{ url('/restaurantes?search=Pizzas') }}" class="info">Ver categoría</a>  
				     </div>  
				</div>
			</div>
			<div class="col-xs-12" style="margin-bottom: 10px;">
				<div class="producto prod-first">  
				     <img src="img/helado.jpg"  alt="">
				     <div class="mask">  
				       <h2>Helados</h2>  
				       <p>¿Buscas deleitar tu paladar con algo frío? Te ofrecemos una lista de los sitios con los mejores helados de la ciudad		</p>
				       <a href="{{ url('/restaurantes?search=helado') }}" class="info">Ver categoría</a>  
				     </div>  
				 </div>
			</div>
			<div class="col-xs-12" style="margin-bottom: 10px;">
				<div class="producto prod-first">  
				     <img src="img/pollo.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pollo</h2>  
				       <p>¿Te vas a resistir a este gran sabor? Sólo entra y encontrarás los mejores pollos de la ciudad</p>
				       <a href="{{ url('/restaurantes?search=pollo') }}" class="info">Ver categoría</a>  
				     </div>  
				</div>
			</div>

			<div class="col-xs-12" style="margin-bottom: 10px;">
					<div class="producto prod-first">  
					     <img src="img/hamburguesa.jpg"  class="" alt="">
					     <div class="mask">  
					       <h2>Hamburguesas</h2>  
					       <p>Junto a la pizza conforman el clásico de la comida a domicilio, aquí puedes conseguir esa hamburguesa que te hace agua la boca</p>
					       <a href="{{ url('/restaurantes?search=hamburguesa') }}" class="info">Ver categoría</a>  
					     </div>  
					</div>
			</div>
			<div class="col-xs-12" style="margin-bottom: 10px;">
				<div class="producto prod-first">  
				     <img src="img/pastas.jpg"  alt="">
				     <div class="mask">  
				       <h2>Pastas</h2> 
				       <p>¿Buscas un plato fuerte? Esta categoría te ofrece todas las bondades de una comida deliciosa, no esperes y descubre nuestra diversidad de pastas</p>					
				       <a href="{{ url('/restaurantes?search=pastas') }}" class="info">Ver categoría</a> 
				     </div>  
				 </div>
			</div>
			<div class="col-xs-12" style="margin-bottom: 10px;">
				<div class="producto prod-first">  
				     <img src="img/ensalada.jpg"  alt="">
				     <div class="mask">  
				       <h2>Ensaladas</h2>  
				       <p>Tú, amante de lo natural, de lo saludable, ésta es tu categoría. Tenemos desde las ensaladas más ligeras, hasta las más producidas</p>
				       <a href="{{ url('/restaurantes?search=ensalada') }}" class="info">Ver categoría</a>  
				     </div>  
				</div>
			</div>
		</div>
	</div>



	<div style="margin-top: 50px;"></div>
<div class="container-fluid" style="padding: 0px; margin-bottom: 50px;">
	<div class="call">
		<div class="third">
			<div class="container">
				<div class="row centrado">
					<div class="col-lg-12 foot">
						<h1>
							¿Eres Propietario de un Restaurante?
						</h1>
						<h2>Consiga más Clientes para su Restaurant Ahora Afiliandose a Ordénalo</h2>
						<a href="{{ url('afiliate') }}"><button type="submit" id="calltoaction" class="btn btn-raised btn-info btn-lg btn-responsive" style="white-space:normal">AFILIARME A ORDÉNALO</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection
@endsection