@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
    <script src="{{ asset('js/galery.js') }}" defer></script>
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
    {{-- En este contenedor se agregarán las imagenes que está en el documento de js
         --}}
    <section class="container-galery">
        <div id="galery" class="galery container">
            <h2>Galería</h2>
            <ul class="galery-images"></ul>
        </div>
        <!--End Galery-->
    </section>
@endsection
