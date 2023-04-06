@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
    <script src="{{ asset('js/store.js') }}" defer></script>
@endsection

{{-- @section('productsCategories')
    @foreach ($findProductsCategories as $categoryProducts)
        <li><a href="#" onclick="location.href='{{ url('store/' . $categoryProducts->name) }}'">{{ $categoryProducts->name }}</a></li>
    @endforeach
@endsection

@section('serviceCategories')
    @foreach ($findCategory as $category)
        <li><a href="#" onclick="location.href='{{ url('services/'.$category->id) }}'">{{ $category->name }}</a></li>
    @endforeach
@endsection --}}

@section('content')
    {{-- En este contenedor se mostrarán los productos --}}
    <div class="container-store">
        <div class="container">
            <h1>Nuestros Productos</h1>
            <div class="filters"></div>
            <div class="productsContainer">
                <a href="{{asset('productview')}}" class="product">
                    <div class="productImage">
                        <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote">
                    </div>
                    <div class="productInfo">
                        <h3 class="nameProduct">Tijeras Para barba y bigote</h3>
                        <p class="price">$350</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate enim, deleniti at nam id saepe modi facere.</p>
                    </div>
                </a>

                <a href="{{asset('productview')}}" class="product">
                    <div class="productImage">
                        <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote">
                    </div>
                    <div class="productInfo">
                        <h3 class="nameProduct">Tijeras Para barba y bigote</h3>
                        <p class="price">$350</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate enim, deleniti at nam id saepe modi facere.</p>
                    </div>
                </a>
                <a href="{{asset('productview')}}" class="product">
                    <div class="productImage">
                        <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote">
                    </div>
                    <div class="productInfo">
                        <h3 class="nameProduct">Tijeras Para barba y bigote</h3>
                        <p class="price">$350</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate enim, deleniti at nam id saepe modi facere.</p>
                    </div>
                </a>
                <a href="{{asset('productview')}}" class="product">
                    <div class="productImage">
                        <img src="images/ejemplo1.jpg" alt="Tijeras para barba y bigote" title="Tijeras para barbar y bigote">
                    </div>
                    <div class="productInfo">
                        <h3 class="nameProduct">Tijeras Para barba y bigote</h3>
                        <p class="price">$350</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate enim, deleniti at nam id saepe modi facere.</p>
                    </div>
                </a>
            </div>
        
        </div>
    </div>
@endsection
