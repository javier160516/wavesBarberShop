document.addEventListener('DOMContentLoaded', function() {
    createGalery();
});

//Esta funcion sirve para que se cree la lista de imagenes para luego asignar la imagen
function createGalery() {
    const galery = document.querySelector('.galery-images');

    for (let i = 1; i <= 8; i++) {
        const image = document.createElement('IMG');
        image.src = `images/thumb/${i}.webp`;
        image.dataset.imageId = i;

        image.onclick = viewImage;
        const list = document.createElement('LI');
        list.appendChild(image);

        galery.appendChild(list);
    }
}

//Esta funcion sirve para que cuando se le de click a la imagen, la imagen salga más grande
function viewImage(e) {
    const id = parseInt(e.target.dataset.imageId);

    const image = document.createElement('IMG');
    image.src = `images/great/${id}.webp`;
    image.classList.add('imageSize');

    const overlay = document.createElement('DIV');
    overlay.appendChild(image);
    overlay.classList.add('overlay');

    //Cuando se da click, cerrar la imagen
    overlay.onclick = function() {
        overlay.remove();
        body.classList.remove('fix-body');
    }

    //Boton para cerrar la imagen
    const cerrarImagen = document.createElement('P');
    cerrarImagen.textContent = 'X';
    cerrarImagen.classList.add('btn-close');

    //Cuando se presiona se cierra la imagen
    cerrarImagen.onclick = function() {
        overlay.remove();
        body.classList.remove('fix-body');
    }

    overlay.appendChild(cerrarImagen);
    //Mostrar en el HTML
    const body = document.querySelector('body');
    body.appendChild(overlay);
    body.classList.add('fijar-body');
}