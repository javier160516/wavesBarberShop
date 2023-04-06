document.addEventListener('DOMContentLoaded', function() {
    signUp();
    singIn();
});

const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx_login = document.querySelector('.formBx_login');
const body = document.querySelector('.body');

function signUp() {
    signupBtn.addEventListener('click', function() {
        formBx_login.classList.add('active');
        body.classList.add('active');
    });
}

function singIn() {
    signinBtn.addEventListener('click', function() {
        formBx_login.classList.remove('active');
        body.classList.remove('active');
    });
}