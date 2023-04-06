/* Esta hoja de js sirve para que cuando no haya resultados, muestre un mensaje de que no hay resultados */
document.addEventListener('DOMContentLoaded', function() {
    validTables();
});

function validTables() {
    const container = document.querySelector('.container');
    const tableChilds = document.querySelectorAll('table tbody tr').length;
    const searcher = document.querySelector('.searcher');
    const table = document.querySelector('.containerTable');
    if (tableChilds === 0) {
        table.classList.add('d-none');
        searcher.classList.add('d-none');
        const containerVoid = document.createElement('DIV');
        containerVoid.classList.add('containerVoid');
        const titleVoid = document.createElement('P');
        const iconVoid = document.createElement('SPAN');
        iconVoid.innerHTML = `<i class="far fa-frown"></i>`;
        titleVoid.textContent = 'Lo sentimos, no hay resultados';
        containerVoid.appendChild(titleVoid);
        containerVoid.appendChild(iconVoid);
        container.appendChild(containerVoid);
    } else {
        containerVoid.classList.add('d-none');
    }
}