@extends('layouts.secondary')

@section('script')
    {{-- <script src="{{ asset('js/login.js') }}" defer></script> --}}
@endsection

@section('content')
    <div class="container-global">
        <form class="login-register" id="login" autocomplete="off" method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Iniciar Sesión</h1>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="Tu Email..."
                    required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input id="password" name="password" type="password" placeholder="Tu contraseña..." required>
            </div>
            @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button class="btn-singIn">Iniciar Sesión</button>
            <a href="{{ asset('register') }}">¿No tienes cuenta?, ¡Registrate!</a>
        </form>
    </div>
    {{-- <div class="body">
        <div class="container_login">
            <div class="blackBg">
                <div class="box_login signin">
                    <h2>Ya tiene una cuenta?</h2>
                    <button class="signinBtn">Iniciar Sesión</button>
                </div>
                <div class="box_login signup">
                    <h2>No tiene una cuenta?</h2>
                    <button class="signupBtn">Registrarse</button>
                </div>
            </div>

            <div class="formBx_login">
                <div class="form_login signinForm">
                    <form>
                        <h3>Iniciar Sesión</h3>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <input class="btn-f" type="submit" value="Iniciar Sesión">
                        <a href="#" class="forgot">Olvidó su contraseña?</a>
                    </form>
                </div>

                <div class="form_login signupForm">
                    <form>
                        <h3>Registrarse</h3>
                        <input type="text" placeholder="Nombre de usuario">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Contraseña">
                        <input type="password" placeholder="Confirmar Contraseña">
                        <input class="btn-f" type="submit" value="Registrarse">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
