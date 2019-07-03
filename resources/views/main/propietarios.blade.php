@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')

<div class="big-padding text-center blue-grey white-text">
	<h1>¡Afiliate a Ordénalo!</h1>
	<h3>Conseguimos nuevos clientes y hacemos el delivery</h3>
	<p>Ordénalo es un sitio web que permite a todo aquel con una conexión a internet poder adquirir comida de forma rápida, segura y sencilla.</p>
	<p>¡Tenemos la herramienta ideal para hacer crecer tu negocio!</p>
</div>

<div class="container" style="margin-bottom: 40px;">
	<div class="col-md-7">
		<div class="white login panel panel-danger"> 
			<div class="panel-heading text-center">
				<h3>Solicitar información sobre afiliaciones</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<input type="text" name="name" placeholder="Ingrese su nombre..." class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Nombre de su restaurant..." class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Dirección..." class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Correo eletrónico..." class="form-control">
				</div>
				<div class="form-group">
					<input type="number" name="name" placeholder="Número de contacto..." class="form-control">
				</div>
				<div class="form-group">
					 <textarea class="form-control" rows="5" id="comment" placeholder="Comentarios o información adicional acerca del restaurant"></textarea>
				</div>
				<form action="" method="" onclick="alert('Gracias por el interés mostrado en formar parte de nosotros, revisaremos la información y responderemos con la mayor brevedad posible.')">
					 <button type="submit" value="Submit"class="btn btn-raised btn-link col-xs-12">Enviar información</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="white login panel panel-danger"> 
			<div class="panel-heading text-center">
				<h3>¿Por qué formar parte de nosotros?</h3>
			</div>
			<div class="panel-body" style="font-size: 17px; text-align: justify;">
			<i class="fa fa-check" aria-hidden="true"> </i> Te ayudamos a llegar a más personas y así conseguir un mayor de número de clientes</p><br>
			<i class="fa fa-check" aria-hidden="true"> </i> Nos encargamos de gestionar la solicitud y de hacer la entrega</p><br>
			<i class="fa fa-check" aria-hidden="true"> </i> Te permitimos elegir y manejar la información que se muestra de tu restaurant</p><br>
			<i class="fa fa-check" aria-hidden="true"> </i> Puedes ver la información de las órdenes que hagan tus clientes</p><br>
			
			<i class="fa fa-check" aria-hidden="true"> </i> Continuamente innovamos para brindarte un mejor servicio</p>
			</div>
		</div>
	</div>
</div>
@endsection
@endsection