@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')

<div class="big-padding text-center blue-grey white-text">
	<h1>CONTACTO</h1>
	<h2>¿Tienes dudas? ¿Necesitas algo? ¿Quieres dar tu opinión?</h2>
	<h3>¡No dudes en contactarnos!</h3>
</div>

<div class="container" style="margin-bottom: 40px;">
	<div class="col-md-offset-2 col-md-8 col-xs-12">
		<div class="white login panel panel-danger"> 
			<div class="panel-heading text-center">
				<h1>Rellena la siguiente información</h1>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<input type="text" name="name" placeholder="Ingrese su nombre..." class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Correo eletrónico..." class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Número de contacto..." class="form-control">
				</div>
				<div class="form-group">
					 <textarea class="form-control" rows="5" id="comment" placeholder="Dejanos aquí el mensaje que quieres comunicar..."></textarea>
				</div>
				<form action="" method="" onclick="alert('Gracias por comunicarte con nosotros, responderemos con la mayor brevedad posible.')">
					 <button type="submit" value="Submit"class="btn btn-raised btn-link col-xs-12">Ponerme en contacto</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@endsection

