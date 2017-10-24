@extends('layouts.app')

@section('content')
<div class="container login global-container">
    <div class="col-xs-12 no-padding flex-v-center">
        <h3>Iniciar Sesión</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="email" placeholder="Usuario" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="password" placeholder="contraseña" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <!--   <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <div class="col-md-12 no-padding">
                            <button type="submit" class=" center btn btn-primary">Entrar</button>
                            <a href="/register" class=" center btn btn-primary">Registrarse</a>

                            <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                Olvide mi contraseña
                            </a>-->

                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>
@endsection
