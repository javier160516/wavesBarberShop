document.addEventListener('DOMContentLoaded', function() {
    deletePositionMain();

    $('#logoDesktop').on('click', function() {
        $('#Menu').toggle('slide');
    });
});

function deletePositionMain() {
    let menu = document.querySelector('#logo');
    menu.addEventListener('click', function() {
        let nav = document.querySelector('.nav');
        nav.classList.remove('positionRelative');
    });
}