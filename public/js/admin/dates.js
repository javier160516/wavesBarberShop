//Esta hoja de js sirve para que se busquen por diferentes filtros, oculte o muestre segun el filtro seleccionado
function selectFilter(id) {
    const filterName = document.querySelector('#findName');
    const filterDate = document.querySelector('#findDate');
    const filterPay = document.querySelector('#findPay');
    const btnFilter = document.querySelector('#btnFilter');

    if (parseInt(id) === 0) {
        filterName.classList.add('d-none');
        filterDate.classList.add('d-none');
        filterPay.classList.add('d-none');
        btnFilter.classList.add('d-none');
    } else if (parseInt(id) === 1) {
        filterName.classList.remove('d-none');
        filterDate.classList.add('d-none');
        filterPay.classList.add('d-none');
        btnFilter.classList.remove('d-none');
    } else if (parseInt(id) === 2) {
        filterName.classList.add('d-none');
        filterDate.classList.remove('d-none');
        filterPay.classList.add('d-none');
        btnFilter.classList.remove('d-none');
    } else if (parseInt(id) === 3) {
        filterName.classList.add('d-none');
        filterDate.classList.add('d-none');
        filterPay.classList.remove('d-none');
        btnFilter.classList.remove('d-none');
    }
}