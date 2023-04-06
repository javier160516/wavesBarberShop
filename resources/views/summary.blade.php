@extends('layouts/principal')
@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

@section('content')
<div class="container-summary">
    
    <div class="containerS">
        <h1>Resumen de Compra</h1>
        <div class="Summarycontainer">
            
            <div class="sectionf1">
                <div class="card grid">
                    <h2 class="summary-titles">Dirección de entrega</h2>
    
                    <div class="product-content summaryp">
                        <p>Miguel Morales.</p>
                        <p>Región 94</p>
                        <p>9981722648</p>
                    </div> 
                    <a href="#" class="btn-pagar btn-cs">Cambiar</a>
                </div>
                  
                <div class="card grid">
                    <h2 class="summary-titles">Método de pago</h2>
    
                    <div class="product-content summaryp">
                    <p>Tarjeta de crédito.</p>
                    <p>1111 1111 1111 1111</p>
                    <p>MasterCard</p>
                    </div>
                    <a href="#" class="btn-pagar btn-cs">Cambiar</a>
                </div>
                
                <form class="formulario-compra form-summary  grid4">
                    <div class="radio-summary">
                        <label class="txt-s">Tipo de envío</label>
                        <input class="radio-s" type="radio">
                        <label class="radio-t">$100.00 24 Hrs</label>
                        <input class="radio-s" type="radio">
                        <label class="radio-t">Gratis</label> 
                    </div>
                  
                    <div class="product-summary">
                        <label class="texto txt-s">Fecha de entrega:  30 de noviembre</label>
                        <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote" class="product-image image-summary">
                    
                        <div class="product-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime natus quis excepturi ab autem beatae eligendi inventore molestias iste temporibus.</p>
                
                            <form class="formulario">
                                {{-- <input class="formulario__campo fs" type="number" placeholder="Cantidad" min="1"> --}}
                                <input class="formulario__submit fs" type="submit" value="Cambiar">
                            </form>    
                        </div>   
                    </div>
                    
                </form>
                
             
            </div>
              

            <div class="sectionf2">
                <div class="card grid3">
                    <div class="container-fs">
                        <form class="form-s">
        
                            <label class="texto" for="Productos">Productos</label>
                            <input class="form-envio" type="text" placeholder="$Total">
            
                            <label class="texto" for="Envío">Envío</label>
                            <input class="form-total" type="text" placeholder="$Total">
            
                            <label class="texto" for="Total">Total</label>
                            <input class="form-total" type="text" placeholder="$Total">
            
                            <a href="#" class="btn-pagar btn-s">Confirmar compra</a>
                        </form>
                    </div> 
                </div>
               
               
            </div>
                
        </div>
        
    </div>
        
</div>
@endsection
