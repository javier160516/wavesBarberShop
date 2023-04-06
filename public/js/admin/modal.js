//Se declaran las variables para seleccionar un elemento dentro de la vista
let close = document.querySelectorAll('.close')[0];
let open = document.querySelectorAll('.openModal')[0];
let modal = document.querySelectorAll('.modal')[0];
let modalC = document.querySelectorAll('.modal-container')[0];
let sectionInfo = document.querySelectorAll('.closeForm')[0];
let sectionInfo2 = document.querySelectorAll('.closeForm')[1];
let sectionArrow = document.querySelectorAll('.closeForm i')[0];
let sectionArrow2 = document.querySelectorAll('.closeForm i')[1];
let buttonCancel = document.querySelector('#cancel');

//Cuando se le de click al elemento "open", despliegue el modal
open.addEventListener('click', function(e) {
    e.preventDefault();
    modalC.style.opacity = '1';
    modalC.style.visibility = 'visible';
    modal.classList.toggle('modal-close');
});

//Cuando se le de click al elemento "close", se cierre el modal
close.addEventListener('click', function() {
    modal.classList.toggle('modal-close');
    setTimeout(function() {
        modalC.style.opacity = '0';
        modalC.style.visibility = 'hidden';
    }, 700);
});

//Cuando a la ventana se le da click, se cierre el modal
window.addEventListener('click', function(e) {
    if (e.target == modalC) {
        modal.classList.toggle('modal-close');
        setTimeout(function() {
            modalC.style.opacity = '0';
            modalC.style.visibility = 'hidden';
        }, 700);
    }
});

//Cuando se le de click al boton cancelar se cierre el modal
buttonCancel.addEventListener('click', function(e) {
    modal.classList.toggle('modal-close');
    setTimeout(function() {
        modalC.style.opacity = '0';
        modalC.style.visibility = 'hidden';
    }, 700);
});


let form1 = document.querySelector('.containerInformationDate');
let form2 = document.querySelector('.containerInfoClient');

//Cuando se le de click al elemento sectionInfo haga un efecto y salga el formulario
sectionInfo.addEventListener('click', function() {
    sectionArrow.classList.toggle('rotate');
    form1.classList.toggle('heightForm');
});

//Cuando se le de click al elemento sectionInfo2 haga un efecto para que salga el formulario
sectionInfo2.addEventListener('click', function() {
    sectionArrow2.classList.toggle('rotate');
    form2.classList.toggle('heightForm');
});

//----------------------------MODAL EDITAR-------------------------------//
let closeEdit = document.querySelector('.closeEdit');
let openEdit = document.querySelector('.openModalEdit');
let modalEdit = document.querySelector('.modalEdit');
let modalCEdit = document.querySelector('.modal-containerEdit');
let sectionInfoEdit = document.querySelectorAll('.closeFormEdit')[0];
let sectionInfo2Edit = document.querySelectorAll('.closeFormEdit')[1];
let sectionArrowEdit = document.querySelector('.closeFormEdit i');
let sectionArrow2Edit = document.querySelector('.closeFormEdit i');
let buttonCancelEdit = document.querySelector('#cancelEdit');

openEdit.addEventListener('click', function(e) {
    e.preventDefault();
    modalCEdit.style.opacity = '1';
    modalCEdit.style.visibility = 'visible';
    modalEdit.classList.toggle('modal-close');
    // $('.containerInfoClient').addClass('heightForm');
});

closeEdit.addEventListener('click', function() {
    modalEdit.classList.toggle('modal-close');
    setTimeout(function() {
        modalCEdit.style.opacity = '0';
        modalCEdit.style.visibility = 'hidden';
    }, 700);
});

window.addEventListener('click', function(e) {
    if (e.target == modalCEdit) {
        modalEdit.classList.toggle('modal-close');
        setTimeout(function() {
            modalCEdit.style.opacity = '0';
            modalCEdit.style.visibility = 'hidden';
        }, 700);
    }
});

buttonCancelEdit.addEventListener('click', function(e) {
    modalEdit.classList.toggle('modal-close');
    setTimeout(function() {
        modalCEdit.style.opacity = '0';
        modalCEdit.style.visibility = 'hidden';
    }, 700);
});



let form1Edit = document.querySelector('.containerInformationDateEdit');
let form2Edit = document.querySelector('.containerInfoClientEdit');

sectionInfoEdit.addEventListener('click', function() {
    sectionArrowEdit.classList.toggle('rotate');
    form1Edit.classList.toggle('heightForm');
});

sectionInfo2Edit.addEventListener('click', function() {
    sectionArrow2Edit.classList.toggle('rotate');
    form2Edit.classList.toggle('heightForm');
});
//-------------------------FIN MODAL EDIT----------------------//

function deleteDate(id) {
    Swal.fire({
        title: '¿Deseas eliminar la cita?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then(function (e) {
        if (e.value === true) {
            
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
            $.ajax({
                type: 'DELETE',
                url: "/dates/delete/" + id,
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (response) {
                    if (response.success === true) {
                        swal.fire("Hecho!", response.message, "success");
                        
                        setTimeout(function(){
                            location.reload();
                        },2000);
                    } else {
                        swal.fire("Error!", response.message, "error");
                    }
                }
            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
}


//------------------------------------------------------------------------------------------------