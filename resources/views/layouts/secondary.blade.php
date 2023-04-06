<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servicios de corte de cabello, afeitado y tratados para la piel, todos en un solo sitio. Puedes agendar una cita con nosotros en dos modalidades a domicilio o en nuestras instalaciones">
    <meta name="keywords" content="corte,cabello,afeitado,mascarilla">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/icon2.webp') }}">
    <title>{{ config('principal.name', 'WavesBarberShop') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('script')

</head>

<body>
    <header class="header-secondary">
        <div class="container-header">
            <div class="bar">
                <div class="nav-principal">
                    <div class="logo logo-secondary">
                        <a href="/" class="waves"><img src="{{ asset('images/logo.webp') }}" alt="WavesBarberShop">
                            WavesBarberShop</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    @yield('scriptFooter')
</body>

</html>
