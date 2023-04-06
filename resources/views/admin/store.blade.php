@extends('admin/layouts/app')

@section('script')
    <script src="{{ asset('js/admin/header.js') }}"></script>
    <script src="{{ asset('js/admin/dates.js') }}"></script>
    <script src="{{ asset('js/admin/validTables.js') }}"></script>
@endsection

@section('content')
    <div class="container containerDates">
        <h1>Productos</h1>
        <div class="searcher">
            <form>
                <Select id="selectF" class="select" onchange="selectFilter(this.value);">
                    <option value="0" selected>Filtrar por...</option>
                    <option value="1">Nombre</option>
                    <option value="2">Fecha</option>
                    <option value="3">pago</option>
                </Select>
            </form>
        </div>
        <div class="containerTable">
            <div class="addProduct"><button class="btn"><a href="#">Agregar Producto</a></button></div>
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Imagén</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Id">1</td>
                        <td data-label="Nombre">Mascarilla Facial</td>
                        <td data-label="Precio">$200</td>
                        <td data-label="Categoría">Facial</td>
                        <td data-label="Imagen">Ejemplo 1</td>
                        <td data-label="Acciones">
                            <div>
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
