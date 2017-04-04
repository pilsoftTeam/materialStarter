@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <br>
                <md-whiteframe md-elevation="2">
                    <form style="padding: 3%" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h3 class="center">Inicia sesion</h3>
                        <md-input-container class="{{ $errors->has('email') ? 'md-input-invalid' : '' }}">
                            <label>Escriba aqui su e-mail</label>
                            <md-input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus>
                            </md-input>

                            @if ($errors->has('email'))
                                <span class="md-error">{{ $errors->first('email') }}</span>
                            @endif
                        </md-input-container>

                        <md-input-container class="{{ $errors->has('password') ? 'md-input-invalid' : '' }}">

                            <label>Escriba aqui su contraseña</label>
                            <md-input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required>
                            </md-input>
                            @if ($errors->has('password'))
                                <span class="md-error">{{ $errors->first('password') }}</span>
                            @endif
                        </md-input-container>

                        <br>
                        <md-button class="md-raised md-primary" type="submit" style="float:right">Ingresar</md-button>
                        <a href="{{ route('password.request') }}">¿ Olvidaste tu contraseña ?</a>
                        <br>
                        <br>
                    </form>
                </md-whiteframe>
            </div>
        </div>
    </div>
@endsection
