@yield('content1')
        <footer class="">
            <div id="redes" class="col-md-12">
                <br>
                <center>
          <a href="#" ><span class="fa  fa-facebook"></span></a>
          <a href="#" ><span class="fa fa-twitter"></span></a>
          <a href="#" ><span class="fa fa-instagram"></span></a>
          <a href="#" ><span class="fa fa-google"></span></a>
          <a href="#" ><span class="glyphicon glyphicon-envelope"></span></a>
          <a href="#" ><span class="glyphicon glyphicon-cloud"></span></a>
                </center>
            </div>
            <div  class="col-xs-12 white-text" id="pie">

             <a href="{{ url('/') }}"><div class="col-sm-2 hidden-xs"><img src="img/logo.png" alt="" class="img-responsive" id="logo1"  height="50" width="50"></div></a>
                <div class="col-sm-2"> 
                    <p><a href="#">Sobre nosotros</a></p>
                    <p><a href="{{ url('/contacto') }}">Contáctanos</a></p>
                    @if(auth::guest() || auth::user()->type == 1)
                    <p><a href="{{ url('/afiliate') }}">¿Eres propietario de un restaurante?</a>
                    @endif
                    </p>
                </div>
                <div class="col-sm-2"> 
                    <p><a href="">Preguntas frecuentes</a></p>
                    <p><a href="">Cómo ordenar</a></p>
                    <p><a href="">Métodos de pago</a></p>
                </div>
                <div class="col-sm-2"> 
                    <p><a href="">Nuestra misión</a></p>
                    <p><a href="{{ url('/afiliate') }}">¿Por qué elegirnos?</a></p>
                </div>
                <div class="col-sm-2"> 
                    <p><a href="{{ url('/restaurantes') }}">Ver todos los restaurantes</a></p>
                    <p><a href="">Categorías</a></p>
                    <p><a href="">Mapa del sitio</a></p>
                </div>
                <div class="col-sm-2">
                    @if(auth::guest())
                    <p><a href="{{ url('/register') }}">Registrate</a></p>
                    <p><a href="{{ url('/login') }}">Inicia Sesión</a></p>
                    @endif
                    @if(auth::guest() || auth::user()->type=='1')
                        <p><a href="{{ url('/carrito') }}">Ver mi carrito</a></p>
                    @endif
                </div>
            </div>
        </footer>   