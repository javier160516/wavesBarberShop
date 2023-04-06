$(document).ready(main());

let contador = 0;

function main() {
    $('#logo').click(function() {
        if (contador == 1) {
            $('.nav').animate({
                left: '-100%',
            });
            $('.nav').removeClass('positionRelative');
            $('.headerText p').removeClass('d-none');
            contador = 0;
        } else {
            $('.nav').animate({
                left: '0%'
            });
            $('.nav').addClass('positionRelative');
            $('.headerText p').addClass('d-none');
            contador = 1;
        }
    });

    $('.submenu').click(function() {
        $(this).children('.children').slideToggle();
    });
}