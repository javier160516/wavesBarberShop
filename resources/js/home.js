document.addEventListener('DOMContentLoaded', function() {
    deletePosition();
});

function deletePosition() {
    let barHome = document.querySelector('.bar');
    barHome.classList.remove('positionRelative');
}