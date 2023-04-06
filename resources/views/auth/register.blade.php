@extends('layouts.secondary')

@section('content')
    <div class="container-global">
        <form class="login-register register" method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Registrarse</h1>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input id="name" name="name" value="{{ old('name') }}" type="text" placeholder="Usuario..." required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <i class="fas fa-at"></i>
                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email..." required>
            </div>
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input id="password" name="password" type="password" placeholder="Contraseña..." required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input id="password-confirm" name="password_confirmation" type="password" placeholder="Confirma tu contraseña..." required>
           
            </div>
            <button class="btn-singIn">Registrarse</button>
            <a href="{{ asset('login') }}">¿Ya tienes cuenta?, ¡Inicia Sesión!</a>
        </form>
    </div>
@endsection

                    {{--<input type="text" placeholder="Nombre de usuario">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Contraseña">
                        <input type="password" placeholder="Confirmar Contraseña"> --}}
