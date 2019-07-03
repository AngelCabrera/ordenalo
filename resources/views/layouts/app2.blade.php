<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.css">-->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/bootstrap-material-design.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../css/ripples.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>{{ config('app.name', 'Ordenalo') }}</title>
            <!-- Styles -->
            <link href="{{ url('/css/app.css') }}" rel="stylesheet">
            <!-- Scripts -->
            <script>
            window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
            </script>
        </head>
        <body>
            <div id="app">
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="barra1">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="{{ url('/') }}" style="margin-left: 10px";>
                   <img src="../../img/logo.png" alt="" height="60px" width="100px;">
                </a>
                <a class="navbar-brand hidden-md hidden-lg hidden-sm" href="{{ url('/') }}">
                   <img src="../../img/logo.png" alt=""  height="30px" style="margin-top: 10px;" ; >
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
                             @if(Auth::guest() || Auth::user()->type == 1)
                                <li>
                                    <a href="{{ url('/carrito') }}">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Carrito
                                        <span class="cicrcle-shopping-cart">
                                            {{ $productsCount }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                                @if (Auth::guest())

                                <li>
                                    <a href="{{ url('/contacto') }}">
                                        <span class="glyphicon glyphicon-envelope"></span>  Contáctanos
                                    </a>
                                </li>
                                <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span>  Iniciar Sesion/Registrarse</a></li>
                                @else
                                @if(Auth::user()->type == 1)


                                @endif
                                @if(Auth::user()->type != 3)
                                <li>
                                    <a href="{{ url('/contacto') }}">
                                        <span class="glyphicon glyphicon-envelope"></span>  Contáctanos
                                    </a>
                                </li>
                                @endif
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="glyphicon glyphicon-user"></span>
                                            {{  Auth::user()->name }}
                                            <span class="caret"></span>
                                        </a>   
                                        <ul class="dropdown-menu">
                                        @if(Auth::user()->type == 3 || Auth::user()->id == 1)
                                            <li><a href="{{ url('/users') }}">Usuarios</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('/restaurants') }}">Restaurantes</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('/products') }}">Productos</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('/orders') }}">Órdenes</a></li>
                                            <li role="separator" class="divider"></li>
                                        @endif
                                        @if (Auth::user()->type == 2)
                                            <li><a href="{{ url('/restaurants') }}">Mi Restaurant</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('/products') }}">Mis Productos</a></li>
                                            <li role="separator" class="divider"></li>
                                        @endif
                                        @if (Auth::user()->type == 1 && Auth::user()->id != 1)
                                        <li><a href="{{ url('/orders') }}">Mis Órdenes</a></li>
                                        <li>
                                        @endif
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
                        @yield('content')
                    </div>
        <script src="../../js/app.js"></script>
        <script src="../../js/jquery.js"></script>  
        <script type="text/javascript" src="../../js/material.min.js"></script>
        <script src="../../js/ripples.min.js"></script>
        <script>
        $.material.init();
        </script>
    </body>
</html>