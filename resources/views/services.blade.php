@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

{{-- @section('productsCategories')
    @foreach ($findProductsCategories as $categoryProducts)
        <li><a onclick="location.href='{{ url('store/' . $categoryProducts->name) }}'">{{ $categoryProducts->name }}</a></li>
    @endforeach
@endsection

@section('serviceCategories')
    @foreach ($findCategory as $category)
        <li><a onclick="location.href='{{ url('services/'.$category->id) }}'">{{ $category->name }}</a></li>
    @endforeach
@endsection --}}

@section('content')
    {{-- En este contenedor se mostrará una lista de servicios con las que contamos --}}
    <div class="container-services">
        <div class="container">
            <h1>Nuestros Servicios</h1>
            <div class="servicesMenu servicesGrid">
                @foreach ($listServices as $service)
                    <div class="service">
                        <input name="cat" class="category" type="hidden" value="{{ $service->category }}">
                        <h3 class="nameService">{{ $service->name }}</h3>
                        <p class="description">{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
