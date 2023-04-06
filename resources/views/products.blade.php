@extends('layouts/principal')
@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

@section('content')
    <div class="containerP">
        
        <div class="product-cards">
            <div class="productI">
                <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote" class="product-image">
            
                <div class="product-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime natus quis excepturi ab autem beatae eligendi inventore molestias iste temporibus, ad, sapiente optio similique asperiores reprehenderit, nostrum accusantium? Ipsam.</p>
        
                    <form class="formulario">
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                        <input class="formulario__submit" type="submit" value="Eliminar">
                        <input class="formulario__campo" type="text" placeholder="$Total">
                    </form>    
                </div>   
            </div>

            <div class="productI">
                <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote" class="product-image">
            
                <div class="product-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime natus quis excepturi ab autem beatae eligendi inventore molestias iste temporibus, ad, sapiente optio similique asperiores reprehenderit, nostrum accusantium? Ipsam.</p>
        
                    <form class="formulario">
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="0">
                        <input class="formulario__submit" type="submit" value="Eliminar">
                        <input class="formulario__campo" type="text" placeholder="$Total">
                    </form>    
                </div>   
            </div>

            <div class="product-buy">
                <form class="formulario-compra">
                    <label class="texto" for="Articulos">Articulos</label>
                    <input class="form-cantidad" type="number" min="1">

                    <label class="texto" for="Envio">Envio</label>
                    <input class="form-envio" type="text" placeholder="$Total">

                    <label class="texto" for="Total">Total</label>
                    <input class="form-total" type="text" placeholder="$Total">

                    <a href="{{asset('address')}}" class="btn-pagar">Comprar ahora</a>
                </form>
            </div>
           
        </div>
            
    </div>
@endsection