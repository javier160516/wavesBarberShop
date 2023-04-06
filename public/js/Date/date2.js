/* Esta hoja de estilos sirve para guardar la cita cuando el pago es en efectivo */
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $('#finishDate').click(function(e) {
        e.preventDefault();
        console.log(e.preventDefault());
        quoteType = date.typeDate;
        dateClient = date.dateClient;
        hour = date.time;
        nameUser = date.name;
        let servicess = date.services;
        let service = [];
        for (let i = 0; i < date.services.length; i++) {
            service.push(servicess[i].slice(0, -11).split(',').toString());
        }
        console.log(service);
        surnames = date.lastName;
        address = date.address;
        phone = date.phone;
        paymentType = date.formPay;
        $.ajax({
            url: 'date',
            method: 'POST',
            data: {
                quoteType: quoteType,
                date: dateClient,
                hour: hour,
                nameUser: nameUser,
                service: service,
                surnames: surnames,
                address: address,
                phone: phone,
                paymentType: paymentType
            },
            success: function(result) {
                Swal.fire({
                    title: 'Confirmado',
                    text: "¡Tu cita de agendó correctamente!",
                    icon: 'success',
                });
                setTimeout(() => {
                    return window.location.href = `date`;
                }, 1000);
            },
            error: function(error) {
                Swal.fire({
                    title: 'Hubo un error',
                    text: "¡No se pudo agenda tu cita!",
                    icon: 'warning',
                });
                setTimeout(() => {
                    return window.location.href = `date`;
                }, 1000);
            }
        });
    });
});