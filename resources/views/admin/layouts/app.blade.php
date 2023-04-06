<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/icon2.webp') }}">
    <title>{{ config('principal.name', 'WavesBarberShop') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;400;700&family=Fredericka+the+Great&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('script')
</head>

<body>
    <div class="containerAdmin">
        <header class="header headerAdmin">
            <div class="container-header container-headerAdmin">
                <div class="navegation">
                    {{-- <div class="sandwich"> --}}
                    <a id="logo" href="#" class="btn-menu"><i class="fas fa-bars"></i></a>
                    <a id="logoDesktop" href="#" class="btn-menu"><i class="fas fa-bars"></i></a>
                    {{-- </div> --}}
                    <div class="title">
                        <span>WavesBarberShop</span>
                    </div>
                    <div class="icon-user">
                        <i class="far fa-user-circle"></i>
                    </div>
                </div>

            </div>
        </header>
        <div class="containerMain">
            <div  class="containerNav">
                <nav id="Menu" class="nav">
                    <ul>
                        <span>Páginas</span>
                        <li><a href="{{ asset('admin/index') }}"> <i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="{{ asset('admin/dates') }}"><i class="fas fa-calendar-check"></i> Citas</a></li>
                        <li><a href="{{ asset('admin/store') }}"><i class="fas fa-store"></i> Tienda</a></li>
                        <li><a href="{{ asset('admin/services') }}"><i class="fas fa-cut"></i> Servicios</a></li>
                        <li><a href="{{ asset('admin/galery') }}"><i class="far fa-image"></i>  Galería</a></li>
                        <span>Configuración</span>
                        <li><a href="{{ asset('admin/settings') }}"><i class="fas fa-cog"></i> Configuración</a></li>
                        <li><a href="{{ asset('admin/users') }}"><i class="fas fa-users"></i> Usuarios</a></li>
                        <li><a href="/"><i class="fas fa-door-open"></i> Salir</a></li>
                    </ul>
                </nav>
            </div>
            <div class="containerr">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
