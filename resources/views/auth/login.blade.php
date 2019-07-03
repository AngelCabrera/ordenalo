@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')

@section('content')
<div class="container login">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading panel-height">Inicia sesión</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <!--  <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label>-->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recuérdame
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1 col-lg-8  col-lg-offset-2">
                                <button type="submit" class="btn btn-raised btn-default loginBtn">
                                    Iniciar sesión
                                </button>
                            </div>
                        </div>
                        <hr>    
                        <div class="form-group noMargin">
                             <div class="col-lg-offset-0 col-sm-offset-2 col-sm-8 col-lg-4">
                                <a class="btn btn-link" style="font-size: 12px;" href="{{ url('/password/reset') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                            <div class="col-sm-offset-2 col-lg-4 col-sm-8"> 
                                <a class="btn btn-link" href="{{ url('/register') }}" style="font-size: 12px;">
                                    ¿No tienes una cuenta?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endsection