@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
    <script src="{{ asset('js/store.js') }}" defer></script>
@endsection

@section('content')
<div class="containerP">
        
    <div class="product-cards view-cards">
        <div class="productI view-container">
            <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote" class="product-image view-image">
        
            <div class="product-content view-product">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime natus quis excepturi ab autem beatae eligendi inventore molestias iste temporibus, ad, sapiente optio similique asperiores reprehenderit, nostrum accusantium? Ipsam.</p>
    
                <form class="formulario form-productv">
                    <input class="formulario__campo view-cuantity" type="number" placeholder="Cantidad" min="1">
                    <a href="#" class="formulario__submit view-btn" type="submit">Agregar al carrito</a>
                </form>    
               
            </div>   
        </div>

        <div class="product-buy view-buy">
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