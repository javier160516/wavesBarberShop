let page = 1; //Declaramos una variable y la inicializamos en 1
const date = {
    typeDate: "",
    services: [],
    dateClient: "",
    time: "",
    name: "",
    lastName: "",
    address: "",
    phone: "",
    formPay: ""
}; //Se crea un objeto con las propiedades que están en la anterior linea
$(document).ready(function() { //Sirve para que cuando el documento o la pagina esté totalmente cargada, se puedan ejecutar las funciones
    $(".header-secondary").remove(); //Aqui estámos eliminando una clase para que el estilo que estaba anteiormente se quite.

    $("#services").multipleSelect({ //Está funcion se modifica mediante una librería que se llama multiselect
        selectAll: false,
        placeholder: "Selecciona un servicio",
        animate: "slide",
        ellipsis: true
    });
    $("#dateTime").multipleSelect({ //Está funcion se modifica mentiante una libreria que se llama multiselect
        singleRadio: true,
        placeholder: "Selecciona la hora",
        animate: "slide",
        ellipsis: true
    });
    validateServices(); //Está funcion sirve para que se valide en que paso está
    viewDate(); //Esta funcion sirve para que se pueda visualizar el contenido del paso en el que está
    changeSection(); //Está funcion sirve para poder cambiar en el paso que está con los botones superiores
    pageNext(); //Sirve para que pueda ir al siguiente paso o seccion
    pagePrevious(); //Sirve para que pueda regresar al paso anteior o seccion anterior
    buttonsPaginator(); //Sirve para que se oculten o visualicen los botones inferiores
    desableDatePrevious(); //Está funcion le dice al input que el minimo es la fecha de hoy
    dateAppointment(); //Sirve para deshabilitar los dias anteriores del input date
    viewResume(); //Aqui valida si todos los campos están llenos, para mostrar toda la información llenada

    let spanHour = document.querySelectorAll(".ms-choice span")[1]; //Seleccionamos un elemento
    spanHour.classList.add("placeholder"); //Le damos la clase placeholder
    spanHour.innerHTML = "Selecciona una hora"; //Le agregamos el contenido
});

function validateServices() {
    const a = document.querySelector('[data-step="1"]'); //Seleccionamos el elemento con ese atributo y lo guardamos en una variable
    const b = document.querySelector('[data-step="2"]'); //Seleccionamos el elemento con ese atributo y lo guardamos en una variable
    if (page === 1) { //Validamos la condicion de que si la variable page es estrictamente igual a 1
        a.addEventListener("click", function() { //Le damos un evento de click
            date.services = []; //Le decimos que date.services es un arreglo
        });
    } else if (page === 2) { //Validamos la condicion de que si la variable page es estrictamente igual a 2
        b.addEventListener("click", function() { //Le damos un evento de click
            date.services = []; //Le decimos que date.services es un arreglo
        });
    }
}

//Esta funcion sirve para ver las 3 pestañas
function viewDate() {
    const sectionPrevious = document.querySelector(".show-section"); //seleccionamos la seccion que tenga la clase .show-section
    if (sectionPrevious) { //Validamos si existe esa funcion
        sectionPrevious.classList.remove("show-section"); //Le removemos la clase
    }

    const sectionActual = document.querySelector(`#step-${page}`); //Seleccionamos el elemento que tenga el id "step-1" o el numero que tenga la variable page
    sectionActual.classList.add("show-section"); //Le agregamos la clase "show-section"

    //Eliminar la clase -Active- en el tab anterior
    const tabPrevious = document.querySelector(".tabs .active");
    if (tabPrevious) {
        tabPrevious.classList.remove("active");
    }
    const tab = document.querySelector(`[data-step="${page}"]`);
    tab.classList.add("active");
}

//Esta funcion sirve para cambiar la seccion mediante los botones superiores
function changeSection() {
    const links = document.querySelectorAll(".tabs button");
    links.forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            page = parseInt(e.target.dataset.step);
            viewDate();
            buttonsPaginator();
        });
    });
}
//Esta funcion sirve para cambiar la seccion mediante el boton "Siguiente"
function pageNext() {
    const pageNext = document.querySelector("#next");
    pageNext.addEventListener("click", () => {
        page++;
        buttonsPaginator();
    });
}

//Esta funcion sirve para cambiar la seccion mediante el boton "Atras"
function pagePrevious() {
    const pagePrevious = document.querySelector("#previous");
    pagePrevious.addEventListener("click", () => {
        page--;
        const reset = document.querySelector('[data-step="1"]');
        reset.addEventListener("click", function() {
            date.services = [];
        });
        buttonsPaginator();
    });
}

//Esta funcion valida los botones inferiores haciendo que se muestren o se oculten
function buttonsPaginator() {
    const pageNext = document.querySelector("#next");
    const pagePrevious = document.querySelector("#previous");
    const endDate = document.querySelector("#finishDate");

    if (page === 1) {
        pagePrevious.classList.add("hide");
        endDate.classList.add("d-none");
        date.services = [];
    } else if (page === 3) {
        pageNext.classList.add("hide");
        pagePrevious.classList.remove("hide");
        viewResume();
    } else {
        pagePrevious.classList.remove("hide");
        pageNext.classList.remove("hide");
        endDate.classList.add("d-none");
        date.services = [];
    }
    viewDate();
}

//Esta funcion deshabilita las fechas anteriores
function dateAppointment() {
    const dateInput = document.querySelector("#date");
    dateInput.addEventListener("input", e => {
        const day = new Date(e.target.value).getUTCDate();
        if ([0, 6].includes(day)) {
            e.preventDefault();
            dateInput.value = "";
        } else {
            date.dateClient = dateInput.value;
        }
    });
}

//Está funcion le dice al input que el minimo es la fecha de hoy
function desableDatePrevious() {
    const inputDate = document.querySelector("#date");

    const dateNow = new Date();
    const year = dateNow.getFullYear();
    const month = dateNow.getMonth() + 1;
    const day = dateNow.getDate() + 1;

    const dateDesable = `${year}-${month < 10 ? `0${month}` : month}-${
        day < 10 ? `0${day}` : day
    }`;
    inputDate.min = dateDesable;
}

//Con esta funcion sirve para obtener toda la infomación puesta en los formularios anteriores
function collectInfo() {
    const {
        typeDate,
        services,
        dateClient,
        time,
        name,
        lastName,
        address,
        phone,
        formPay
    } = date; //Destructuring o como se diga
    //aplicamos una funcion de change
    document.addEventListener("change", function() {
        let type = document.querySelector('#selectType').value; //La forma de pago
        date.typeDate = type; //Guardamos el valor obtenido en la variable

        let formPayCustomer = document.querySelector('#typePay').value;
        date.formPay = formPayCustomer;
    });

    $('input[type="checkbox"]:checked').each(function() {
        date.services.push(this.value);
    });

    // Obtenemos la hora
    let hour = document.querySelector('.ms-drop input[type="radio"]:checked')
        .value;
    date.time = hour;

    let nameCustomer = document.querySelector("#nameUser").value;
    date.name = nameCustomer.replace(/ /g, "").trim();

    let lastNameCustomer = document.querySelector("#surname").value;
    date.lastName = lastNameCustomer.replace(/ /g, "").trim();

    let addressCustomer = document.querySelector("#address").value;
    date.address = addressCustomer.trim();

    let phoneCustomer = document.querySelector("#phone").value;
    date.phone = phoneCustomer.replace(/ /g, "").trim();
}

//Esta funcion sirve para que cuando llegue al ultimo paso, se pueda visualizar el resumen que se recolecto anteriormente
// y valida que todos los campos estén llenos, si no, les muestra un mensaje que aun falta información.
// Tambien lo que hace esta funcion es que va agregando toda la información recolectada y va creando los elementos HTML y los
// va agregando.
function viewResume() {
    validateServices();
    collectInfo();
    const {
        typeDate,
        services,
        dateClient,
        time,
        name,
        lastName,
        address,
        phone,
        formPay
    } = date; //Destructuring

    const resumeDiv = document.querySelector(".container-resumen");

    //limpia el html anterior
    while (resumeDiv.firstChild) {
        resumeDiv.removeChild(resumeDiv.firstChild);
    }

    if (Object.values(date).includes("")) {
        const emptyService = document.createElement("P");
        emptyService.textContent =
            "Faltan datos, porfavor termina de llenar los campos";
        resumeDiv.appendChild(emptyService);
        return;
    }

    const headingDate = document.createElement("H2");
    headingDate.textContent = "Resumen de tu cita";

    const infoCustomer = document.createElement("DIV");
    const infoCustomerTitle = document.createElement("H4");
    infoCustomerTitle.textContent = "Informacion del cliente";

    const nameCustomer = document.createElement("P");
    nameCustomer.innerHTML = `<span>Nombre: </span>${name}`;

    const lastNameCustomer = document.createElement("P");
    lastNameCustomer.innerHTML = `<span>Apellido: </span>${lastName}`;

    const addressCustomer = document.createElement("P");
    addressCustomer.innerHTML = `<span>Dirección: </span>${address}`;

    const phoneCustomer = document.createElement("P");
    phoneCustomer.innerHTML = `<span>Teléfono: </span>${phone}`;

    const typeDateCustomer = document.createElement("P");
    if(typeDate == '1'){
        typeDateCustomer.innerHTML = `<span>Tipo de cita: </span>En Barbería`;
    }else if(typeDate == '2'){
        typeDateCustomer.innerHTML = `<span>Tipo de cita: </span>A Domicilio`;
    }

    //Se agregan todos estos elementos al contenedor
    infoCustomer.appendChild(infoCustomerTitle);
    infoCustomer.appendChild(nameCustomer);
    infoCustomer.appendChild(lastNameCustomer);
    infoCustomer.appendChild(addressCustomer);
    infoCustomer.appendChild(phoneCustomer);
    infoCustomer.appendChild(typeDateCustomer);

    const serviceDate = document.createElement("DIV"); //Se crea el div
    const serviceTitle = document.createElement("H4"); //Se crea el h4
    serviceTitle.textContent = `Servicios:`; //Se le agrega el contenido al h4
    serviceDate.appendChild(serviceTitle); //Se agrega al div

    //Servicioosss
    let subTotal = 0;
    let serviceH = 0;
    for (let i = 0; i < date.services.length; i++) {
        //Guardamos el nombre del servicio
        const serviceSelected = document.createElement("P");
        serviceSelected.innerHTML = `${i + 1}: ${services[i]}`;

        //Guardamos el precio y hacemos la operación
        const priceService = parseInt(services[i].substr(-6).trim());
        subTotal += priceService;
        serviceDate.appendChild(serviceSelected);
    }

    //Se crea el div que va a contener el total
    const containerTotal = document.createElement("DIV");
    containerTotal.classList.add("resume");
    //Se crea el parrafo para el total
    const subtotal = document.createElement("P");
    subtotal.innerHTML = `<span>Subtotal: <i>$${subTotal}</i> </span>`;
    

    containerTotal.appendChild(subtotal);
    if (date.typeDate == '2') {
        //Se crea el parrafo para el precio del adomicilio
        const homeService = document.createElement("P");
        serviceH = 100;
        homeService.innerHTML = `<span>Servicio a domicilio: <i>$${serviceH}</i></span>`;
        containerTotal.appendChild(homeService);
    }
    //Se crea una linea que no hace nada pero se ve chida
    const line = document.createElement("HR");

    //Se crea el parrafo para el total = Servicios + Servicio a domicilio
    const totalService = document.createElement("P");
    let totalPagar = subTotal + serviceH;
    totalService.textContent = `Total: $${totalPagar}`;
    containerTotal.appendChild(line);
    containerTotal.appendChild(totalService);

    const dateCustomer = document.createElement("P");
    dateCustomer.innerHTML = `<span>Fecha: </span>${dateClient}`;

    const timeCustomer = document.createElement("P");
    timeCustomer.innerHTML = `<span>Hora: </span>${time}`;

    const typePaycustomer = document.createElement("P");
    if(formPay == '1'){
        typePaycustomer.innerHTML = `<span>Tipo de pago: </span>Efectivo`;
    }else if(formPay == '2'){
        typePaycustomer.innerHTML = `<span>Tipo de pago: </span>Paypal`;
    }
    let endDate = document.querySelector("#finishDate");
    let endDate2 = document.querySelector("#paypal-button");
    
    if(date.formPay == '2'){
        endDate2.classList.remove("d-none");
        let inputPay = document.querySelector('#inputPay');
        inputPay.value = totalPagar;
    }else{
        endDate.classList.remove("d-none");
    }

    serviceDate.appendChild(dateCustomer);
    serviceDate.appendChild(timeCustomer);
    serviceDate.appendChild(typePaycustomer);

    resumeDiv.appendChild(headingDate);
    resumeDiv.appendChild(infoCustomer);
    resumeDiv.appendChild(serviceDate);
    resumeDiv.appendChild(containerTotal);
}