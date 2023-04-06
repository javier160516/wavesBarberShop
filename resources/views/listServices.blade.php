@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
@endsection

{{-- @section('productsCategories')
    @foreach ($findCategoryProducts as $categoryProducts)
        <li><a href="#" onclick="location.href='{{ url('store/' . $categoryProducts->name) }}'">{{ $categoryProducts->name }}</a></li>
    @endforeach
@endsection

@section('serviceCategories')
    @foreach ($findCategoryMenu as $category)
        <li><a href="#" onclick="location.href='{{ url('services/'.$category->id) }}'">{{ $category->name }}</a></li>
    @endforeach
@endsection --}}

@section('content')
    {{-- En este contenedor se mostrará una lista de servicios dependiendo el filtrado --}}
    <div class="container-services">
        <div class="container">
            <h1>
                <h1>Servicio de 
                    @foreach ($nameHead as $nameH)
                        {{ $nameH->name }}</h1>
                    @endforeach
            </h1>
            <div class="servicesMenu servicesGrid">
                @foreach ($findCategory as $categorys)
                    <div class="service">
                        <h3 class="nameService">{{ $categorys->name }}</h3>
                        <p class="description">{{ $categorys->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection