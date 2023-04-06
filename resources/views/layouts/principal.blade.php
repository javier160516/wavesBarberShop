<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Barberia especializada en el corte de cabello y barba de caballeros, ademas de contar con una tienda en linea,  ¡Reserva ya tu cita!">
    <meta name="keyword" content="barberia, peluqueria, peluquera, estetica, estilistas, barberos, barba, bigote">
    <meta name="robots" content="index, follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/icon2.webp') }}">
    <title>{{ config('principal.name', 'Cortes de cabello y barba - WavesBarberShop') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
    <div id="background" class="background">
        <header class="header">
            <div class="container-header">
                <div class="bar">
                    <div class="nav-principal">
                        <div class="logo">
                            <a id="logo" href="#" class="btn-menu"><i class="fas fa-bars"></i></a>
                            <a href="/" class="waves"><img src="{{ asset('images/logo.webp') }}" alt="WavesBarberShop">
                                WavesBarberShop</a>
                        </div>
                        <nav class="nav">
                            <ul class="menu">
                                <li><a href="{{ asset('date') }}">Agenda una Cita</a></li>
                                <li class="submenu">
                                    <div class="content-dropdown">
                                        <a href="{{ asset('store') }}">Tienda</a>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <ul class="children">
                                        @yield('productsCategories')
                                        {{-- <li><a href="#">Cabello</a></li>
                                        <li><a href="#">Barba</a></li>
                                        <li><a href="#">Mascarillas</a></li> --}}
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <div class="content-dropdown">
                                        <a href="{{ asset('services') }}">Servicios</a>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <ul class="children">
                                        @yield('serviceCategories')
                                    </ul>
                                </li>
                                <li><a href="{{ asset('galery') }}">Galería</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li>
                                            <a href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="submenu perfilMenu">
                                        <a href="#" role="button">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <ul class="children">
                                            <li>
                                                <a href="{{ asset('admin/index') }}">Configuración <i class="fas fa-cog"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('admin/dates') }}">Mis citas <i class="fas fa-calendar-check"></i></a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesión') }} <i class="fas fa-power-off"></i>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                                <li class="d-none" id="shopping-cart">
                                    <a href="{{asset('products')}}"><i class="fas fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="headerText">
                    <h1>¡Los mejores cortes solo en Waves BarberShop!</h1>
                    <p>Deja que tu estilo hable por ti </p>
                </div>
            </div>
        </header>
        <div id="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: #fcf9f5; fill: #fcf9f5;"></path>
            </svg></div>
    </div>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="nav-footer">
            <ul>
                <li><a href="{{ asset('date') }}">Agenda una cita</a></li>
                <li><a href="{{ asset('store') }}">Tienda</a></li>
                <li><a href="{{ asset('services') }}">Servicios</a></li>
                <li><a href="{{ asset('galery') }}">Galería</a></li>
            </ul>
            <div>
                <h4>Redes Sociales</h4>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="credits">
            <p>Derechos reservados WavesBarberShop 2021&copy;</p>
        </div>
    </footer>
</body>

</html>
