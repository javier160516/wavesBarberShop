/* Con esta hoja de js se hace la peticion ajax para p0oder guardar el pago cuando se elije paypal */
document.addEventListener('DOMContentLoaded', function() {
    getTotal();
});

function getTotal() {

    // paypal.Buttons().render('#paypal-button-container');
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'AYqDBZC7zqie_dzClloyo_scUYdkVFd2fnawp8a1xBCl_Ojhj5FXrEKRm7d1HpVCBp0BHE0pvZGrqrgG',
            production: 'AVk8baqp93rz5iA2SBqKw9vxTryN_7w6HFiQyf_ZsHxoNhF5M0R7Jwgd6I1Ztz07AQXkGCBIhToolz8X'
        },
        // Customize button (optional)
        locale: 'en_ES',
        style: {
            size: 'small',
            color: 'white',
            shape: 'pill',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function(data, actions) {
            let priceTotal = document.querySelector('#inputPay').value;
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: `${priceTotal}`,
                        currency: 'MXN'
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                // Show a confirmation message to the buyer
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                quoteType = date.typeDate;
                dateClient = date.dateClient;
                hour = date.time;
                nameUser = date.name;
                services = date.services;
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
                        service: services,
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
                        console.log(error);
                        Swal.fire({
                            title: 'Hubo un error',
                            text: "¡No se pudo agenda tu cita!",
                            icon: 'warning',
                        });
                        // setTimeout(() => {
                        //     return window.location.href = `date`;
                        // }, 1000);
                    }
                });
            });
        }
    }, '#paypal-button');
}