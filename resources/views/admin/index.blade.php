@extends('admin/layouts/app')

@section('script')
    <script src="{{ asset('js/admin/header.js') }}"></script>
@endsection

@section('content')
    <div class="content">
        <div class="titleAdmin">
            <h1>Dashboard</h1>
        </div>
        <div class="targets">
            <div class="target blue">
                <span>4</span>
                <p>Citas Agendadas</p>
            </div>
            <div class="target green">
                <span>4</span>
                <p>Citas Canceladas</p>
            </div>
            <div class="target orange">
                <span>4</span>
                <p>Citas Totales</p>
            </div>
        </div>
        <div class="containerVoid">
            <p>Lo sentimos, no hay metricas por el momento...</p>
            <span><i class="far fa-frown"></i></span>
        </div>
    </div>
@endsection
