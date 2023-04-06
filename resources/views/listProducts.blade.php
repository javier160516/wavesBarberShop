@extends('layouts/principal')

@section('script')
    <script src="{{ asset('js/deleteBg.js') }}" defer></script>
    <script src="{{ asset('js/store.js') }}" defer></script>
@endsection

{{-- @section('productsCategories')
    @foreach ($findProducts as $categoryProducts)
        <li><a href="#" onclick="location.href='{{ url('store/' . $categoryProducts->name) }}'">{{ $categoryProducts->name }}</a></li>
    @endforeach
@endsection

@section('serviceCategories')
    @foreach ($findCategoryservices as $category)
        <li><a href="#" onclick="location.href='{{ url('services/'.$category->id) }}'">{{ $category->name }}</a></li>
    @endforeach
@endsection --}}

@section('content')
    <h1>Hola mundo</h1>
@endsection