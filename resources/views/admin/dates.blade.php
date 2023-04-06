@extends('admin/layouts/app')

@section('script')
    <script src="{{ asset('js/admin/header.js') }}"></script>
    <script src="{{ asset('js/admin/dates.js') }}"></script>
    <script src="{{ asset('js/admin/validTables.js') }}" defer></script>
    <script src="{{ asset('js/admin/modal.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            $('.openModalEdit').on('click',function (){
                $('#editModal')
            )};
        )};
    </script>
@endsection

@section('content')
    <div class="container containerDates">
        <h1>Mis citas</h1>
        <div class="searcher">
            <form>
                <Select id="selectF" class="select" onchange="selectFilter(this.value);">
                    <option value="0" selected>Filtrar por...</option>
                    <option value="1">Nombre</option>
                    <option value="2">Fecha</option>
                    <option value="3">pago</option>
                </Select>
                <div id="containerFilter" class="form-group">
                    <input class="d-none" id="findName" type="text" name="findName"
                        placeholder="Escribe el nombre...">
                    <input class="d-none" id="findDate" type="date" name="findDate">
                    <select id="findPay" name="findPay" class="select d-none">
                        <option value="0">Forma de pago...</option>
                        <option value="1">Efectivo</option>
                        <option value="2">Paypal</option>
                    </select>
                    <button id="btnFilter" class="d-none"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="containerDates">
            <div class="addProduct"><a href="#" class="btn openModal">Agregar Cita</a></div>
            <table class="table dates">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Servicios</th>
                    <th>Fecha</th>
                    <th>Tipo cita</th>
                    <th>Pago</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($dates as $date)
                    <tr>
                        <td data-label="Id">{{ $date['id'] }}</td>
                        <td data-label="Nombre">{{ $date['nameUser'] }}&nbsp;{{ $date['surnames'] }}</td>
                        <td data-label="Servicios"></td>
                        <td data-label="Fecha">{{ $date['date'] }}</td>
                        <td data-label="Tipo">{{ $date['quoteType'] }}</td>
                        <td data-label="Pago">{{ $date['paymentType'] }}</td>
                        <td data-label="Acciones">
                            <div>
                                <a href="#" class="openModalEdit"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" onclick="deleteDate({{ $date['id'] }})"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- INICIO MODAL --}}
        <div class="modal-container">
            <div class="modal modal-close">
                <p class="close">X</p>
                <h2>Agrega una cita</h2>
                <form>
                    <span class="closeForm"><i class="fas fa-chevron-down"></i> Información de Cita</span>
                    <div class="containerInformationDate heightForm">
                        <div class="form-group">
                            <label for="typeDateSelect">Tipo de cita:</label>
                            <select name="typeDateSelect" id="typeDateSelect">
                                <option value="0" selected disabled>--- Elige una opción ---</option>
                                <option value="En Barberia">En Barbería</option>
                                <option value="A Domicilio">A Domicilio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="serviceSelect">Servicio</label>
                            <select name="serviceSelect" id="serviceSelect">
                                <option value="0" selected disabled>--- Elige una opción ---</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input type="date" name="date" id="inputDate">
                        </div>
                        <div class="form-group">
                            <label for="hourSelect">Hora:</label>
                            <select name="hourSelect" id="hourSelect">
                                <option value="0">--- Elige una opción ---</option>
                            </select>
                        </div>
                    </div>
                    <span class="closeForm"><i class="fas fa-chevron-down"></i> Información del Cliente</span>
                    <div class="containerInfoClient heightForm">
                        <div class="form-group">
                            <label for="nameUser">Nombre</label>
                            <input type="text" name="nameUser" id="nameUser">
                        </div>
                        <div class="form-group">
                            <label for="surnames">Apellido</label>
                            <input type="text" name="suernames" id="surnames">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" id="address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="typePayment">Tipo de pago</label>
                            <select name="typePayment" id="typePayment">
                                <option value="Efectivo">Efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttonsModal">
                        <button class="btn green" type="button">Agendar</button>
                        <button id="cancel" class="btn red" type="button">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- FIN MODAL --}}
        {{-- ------------------------------------------------------------------------------ --}}
        {{-- INICIO MODAL EDITAR--}}
        <div class="modal-containerEdit" id="editModal">
            <div class="modalEdit modal-close">
                <p class="closeEdit">X</p>
                <h2>Agrega una cita</h2>
                <form id="editID">
                    @csrf
                    @method('PUT')
                    <span class="closeFormEdit"><i class="fas fa-chevron-down"></i> Información de Cita</span>
                    <div class="containerInformationDateEdit heightForm">
                        <div class="form-group">
                            <label for="typeDateSelect">Tipo de cita:</label>
                            <select name="typeDateSelect" id="typeDateSelectEdit">
                                <option value="0" selected disabled>--- Elige una opción ---</option>
                                <option value="En Barberia">En Barbería</option>
                                <option value="A Domicilio">A Domicilio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="serviceSelect">Servicio</label>
                            <select name="serviceSelect" id="serviceSelectEdit">
                                <option value="0" selected disabled>--- Elige una opción ---</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input type="date" name="date" id="inputDateEdit">
                        </div>
                        <div class="form-group">
                            <label for="hourSelect">Hora:</label>
                            <select name="hourSelect" id="hourSelectEdit">
                                <option value="0">--- Elige una opción ---</option>
                            </select>
                        </div>
                    </div>
                    <span class="closeFormEdit"><i class="fas fa-chevron-down"></i> Información del Cliente</span>
                    <div class="containerInfoClientEdit heightForm">
                        <div class="form-group">
                            <label for="nameUser">Nombre</label>
                            <input type="text" name="nameUser" id="nameUser">
                        </div>
                        <div class="form-group">
                            <label for="surnames">Apellido</label>
                            <input type="text" name="suernames" id="surnames">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" id="address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="typePayment">Tipo de pago</label>
                            <select name="typePayment" id="typePaymentEdit">
                                <option value="Efectivo">Efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttonsModal">
                        <button class="btn green" type="submit">Agendar</button>
                        <button id="cancelEdit" class="btn red" type="button">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- FIN MODAL EDITAR--}}
    </div>
@endsection
