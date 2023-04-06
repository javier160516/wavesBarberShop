/* Esta funcion sirve para que cuando se entre a alguna hoja que no requira el fondo que está en el home
   quite todo ese contenedor para hacerlo más dinamico
 */
document.addEventListener('DOMContentLoaded', function() {
    //Quita el fondo
    let background = document.querySelector('#background');
    background.classList.remove('background');

    //Quita el texto principal
    let headerText = document.querySelector('.headerText');
    headerText.remove();

    //Cambiar la altura del header
    let header = document.querySelector('.header');
    header.classList.add('hAuto');

    //Seleccionar la lista
    let cart = document.querySelector('#shopping-cart');
    cart.classList.remove('d-none');

    deleteWave();

});

function deleteWave() {
    let bar = document.querySelector('.bar');
    bar.classList.add('positionRelative');
    bar.classList.add('z-index');
    let wave = document.querySelector('#wave');
    wave.classList.add('d-none');
}