@extends('layouts/principal')
@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

@section('content')
<div class="containerP payment-container">
    <h1>Método de pago</h1>
    
    <div class="product-buy  payment-grid">
        <form class="formulario-compra payment-form">
            <label class="texto text-payment1">Selecciona un método de pago</label>
            <label class="texto text-payment">Tarjeta de crédito o débito</label>

            <label class="texto text-payment" for="Dirección">Número de la tarjeta</label>
            <input class="form-envio form-style pay-style" type="number" placeholder="Numero con 16 digitos" min="1">

            <label class="texto text-payment" for="Codigo Postal">Nombre en la tarjeta</label>
            <input class="form-envio form-style pay-style" type="text" placeholder="Ingrese el nombre">

            <label class="texto text-payment" for="Fecha">Fecha de vencimiento</label>
            <input class="form-envio form-style pay-style" type="date" name="fecha">

            <a href="{{asset('summary')}}" class="btn-pagar btn-form btn-pay">Continuar</a>
        </form>
    </div>
</div>
@endsection