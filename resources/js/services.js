document.addEventListener("DOMContentLoaded", function() {
    let count = document.querySelectorAll(".servicesMenu .service").length;
    // console.log(count);
    validateServices(count);
    // addImageService();
});

function validateServices(count) {
    if (count === 0) {
        const servicesMenu = document.querySelector(".servicesMenu");
        servicesMenu.classList.add("d-none");
        const servicesMenuVoid = document.querySelector(".container");
        const containerVoid = document.createElement("DIV");
        containerVoid.classList.add("containerVoid");
        const titleVoidText = document.createElement("P");
        titleVoidText.textContent = "No hay servicios";
        const iconVoid = document.createElement("SPAN");
        iconVoid.innerHTML = `<i class="far fa-frown"></i>`;

        containerVoid.appendChild(titleVoidText);
        containerVoid.appendChild(iconVoid);

        servicesMenuVoid.appendChild(containerVoid);
    }
}