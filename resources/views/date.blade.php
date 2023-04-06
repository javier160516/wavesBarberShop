@extends('layouts.secondary')

@section('script')
    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
    {{-- <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script> --}}
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID">
        // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
    </script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

@endsection

@section('content')
    <div class="container-date">
        <div class="image-date"></div>
        <div class="makeDate">
            <div class="header-date">
                <a href="{{ asset('/') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1><span>Agenda tu Cita</span></h1>
            </div>
            {{-- Estos son los botones para poder cambiar de sección --}}
            <nav class="tabs">
                <button class="active" type="button" data-step="1">Información Cita</button>
                <button type="button" data-step="2">Informacion Cliente</button>
                <button type="button" data-step="3">Resumen</button>
            </nav>
            {{-- Esta seccion te muestra un formulario donde puedes elegir:
                -El tipo de cita
                -Los servicios
                -La fecha
                -La hora
            --}}
            <div id="step-1" class="section">
                <h2>Elige tu cita</h2>
                <p>Elige la fecha de tu cita y elige tu servicio</p>
                <form class="form"  method="POST">
                    @csrf
                    <div class="form-group">
                        <h3>Tipo de cita</h3>
                        {{-- Este es un select donde puedes elegir el tipo de cita --}}
                        <select id="selectType" class="containerRadio">
                            <option value="">----- Elige alguna opción -----</option>
                            @foreach ($listQuoteType as $qtype)
                                <option value="{{ $qtype->id }}">{{ $qtype->name }}</option>
                            @endforeach
                        <select>
                    </div>
                    {{-- Este es un select donde puedes elegir los servicios, este select ya está modificado con una librería --}}
                    <div class="multiselect">
                        <label for="services">Servicio</label>
                        <select id="services" name="services[]" multiple="multiple">
                            {{-- Con el foreach listamos los servicios que tenemos en la base de datos --}}
                            @foreach ($listServices as $listService)
                                <option value="{{ $listService->name }} - $ {{ $listService->price }}">
                                    {{ $listService->name }} - $<span>{{ $listService->price }}</span></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group-grid">
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input id="date" type="date" onkeydown="return false">
                        </div>
                        <div class="form-group">
                            <label for="time">Hora</label>
                            <select name="dateTime" id="dateTime">
                                @foreach ($hours as $hourA)
                                    <option value="{{ $hourA->hour }}">{{ $hourA->hour }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Section 1-->
            {{-- En la seccion 2, se mostrará la información del cliente así como: 
                - Nombre
                - Apellido
                - Dirección
                - Telefono
                - Forma de pago
            --}}
            <div id="step-2" class="section">
                <h2>Tus datos</h2>
                <p>Coloca tus datos y elige tus servicios a continuacion</p>
                <form class="form" method="POST">
                    @csrf
                    <div class="form-group-grid">

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input id="nameUser" name="name" type="text" placeholder="Tu nombre...">
                        </div>
                        <div class="form-group">
                            <label for="surname">Apellido</label>
                            <input id="surname" name="surname" type="text" placeholder="Tu Apellido...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input id="address" name="address" type="text" placeholder="Tu Dirección...">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" name="phone" id="phone" placeholder="Tu teléfono...">
                    </div>
                    <div class="form-group">
                        <h3>Forma de pago</h3>
                        <select id="typePay">
                            <option value="">----- Elige una opción -----</option>
                            @foreach ($listPayments as $payment)
                                <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <!--End Section 2-->
            {{-- En esta seccion se mostrará el resumen de las 2 secciones anteriores --}}
            <div id="step-3" class="section container-resumen">
            </div>
            <div class="pagination">
                <button id="previous" type="button">&laquo; Atrás</button>
                <button id="next" type="button">Siguiente &raquo;</button>
                <button id="finishDate" type="submit"  class="d-none"><input id="total" name="total"
                    type="hidden">Agendar Cita</button>
                <input id="inputPay" type="hidden">
                <div class="d-none" id="paypal-button" onclick="getTotal(this.value);"></div>
            </div>
        </form>
        </div>
    </div>
@endsection

@section('scriptFooter')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js" type="text/javascript" defer></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js" type="text/javascript" defer></script>
    <script src="{{ asset('js/Date/date.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('js/Date/date2.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('js/Date/paypal.js') }}" defer></script>
@endsection
