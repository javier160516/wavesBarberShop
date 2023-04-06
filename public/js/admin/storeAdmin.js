/* Esta hoja de js sirve para que cuando no haya resultados, muestre un mensaje de que no hay resultados */
document.addEventListener('DOMContentLoaded', function() {
    let countP = document.querySelectorAll('.productsContainer .product').length;
    validateProducts(countP);
});

function validateProducts(countP) {
    if (countP === 0) {
        const productsContainer = document.querySelector('.productsContainer');
        productsContainer.classList.add('d-none');
        const container = document.querySelector('.container');
        const productsVoid = document.createElement('DIV');
        productsVoid.classList.add('containerVoid');
        const titleVoidText = document.createElement('P');
        titleVoidText.textContent = 'No se encontraron productos';
        const iconVoid = document.createElement('SPAN');
        iconVoid.innerHTML = `<i class="far fa-frown"></i>`;

        productsVoid.appendChild(titleVoidText);
        productsVoid.appendChild(iconVoid);

        container.appendChild(productsVoid);
    }
}