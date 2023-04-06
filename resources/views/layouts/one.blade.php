<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/icon2.webp') }}">
    <title>{{ config('principal.name', 'WavesBarberShop') }}</title>

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
                @yield('serviceCategories')
                <div class="headerText">
                    <h1>Deja que tu estilo hable por ti</h1>
                    <p>¡Los mejores cortes solo en WavesBarberShop!</p>
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
