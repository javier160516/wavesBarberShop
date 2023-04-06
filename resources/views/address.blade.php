@extends('layouts/principal')
@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

@section('content')
<div class="container-address">
    <h1>Dirección de envío</h1>
    <div class="containerP address-C">
        <div class="product-cards address-gap">
            <div class="productI address">
            
                <div class="product-content address-card">
                    <a href="{{asset('payment')}}">
                        <h3>Dirección 1</h3>
                    <p> Miguel Morales</p> 
                    
                    <p>Sm 1 Mz2 L3 CP 11111 Region 94</p>

                    <p>Referencia: Enfrente de Guarderia</p>

                    <p>Tel: 9981722648</p>

                    <form class="formulario form-container">
                        {{-- <a href="{{asset('payment')}}"class="formulario__submit address-btn1"> Elegir Dirección</a> --}}
                        <input class="formulario__submit address-btn2" type="submit" value="Editar">
                        <input class="formulario__submit address-btn2" type="submit" value="Eliminar">
                    </form>
                    </a> 
                </div>
                
            </div>

            <div class="productI addresstwo">
            
                <div class="product-content address-card">
                    <a href="{{asset('payment')}}">
                        <h3>Dirección 1</h3>
                    <p> Miguel Morales</p> 
                    
                    <p>Sm 1 Mz2 L3 CP 11111 Region 94</p>

                    <p>Referencia: Enfrente de Guarderia</p>

                    <p>Tel: 9981722648</p>

                    <form class="formulario form-container">
                        {{-- <a href="{{asset('payment')}}"class="formulario__submit address-btn1"> Elegir Dirección</a> --}}
                        <input class="formulario__submit address-btn2" type="submit" value="Editar">
                        <input class="formulario__submit address-btn2" type="submit" value="Eliminar">
                    </form>
                    </a> 
                </div>
               
            </div>

            <div class="product-buy  address-grid">
                <form class="formulario-compra address-form">
                    <label class="texto text-form">Agregar nueva dirección</label>

                    <label class="texto" for="Dirección">Dirección</label>
                    <input class="form-envio form-style" type="text" placeholder="Ingrese su dirección">

                    <label class="texto" for="Codigo Postal">Código postal</label>
                    <input class="form-envio form-style" type="text" placeholder="Ingrese su CP">

                    <label class="texto" for="Telefono">Telefono</label>
                    <input class="form-envio form-style" type="tel" name="telefono" placeholder="Ingrese su teléfono">

                    <a href="{{asset('address')}}" class="btn-pagar btn-form">Agregar Dirección</a>
                </form>
            </div>
        
        </div>
        
    </div>
</div>

@endsection