@extends('layouts.footer')
@extends('layouts.app')
@section('content')
@section('content1')
@section('content')
<div class="container login">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading panel-height">Registrate y ordénalo! <span class="fa fa-motorcycle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre..." required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo..." required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese una contraseña..." required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita su contraseña..."  required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="address" type="text" class="form-control" name="address" placeholder="Ingrese su dirección..." required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6  col-md-offset-3">
                                <button type="submit" class="btn btn-raised btn-default loginBtn">
                                    ¡Registrarme!
                                </button>
                            </div>
                        </div>
                        <hr>    
                        <div class="form-group noMargin">
                             <div class="col-md-5"> 
                                <a class="btn btn-link" href="{{ url('/login') }}" style="font-size: 12px;">
                                    ¿Ya tienes una cuenta?
                                </a>
                            </div>
                            <div class="col-md-off-set-1 col-md-5"> 
                                <a class="btn btn-link" style="font-size: 12px;" href="{{ url('/') }}">
                                    <p>Ir a la página principal</p>
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
