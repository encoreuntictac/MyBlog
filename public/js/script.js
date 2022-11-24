const BTN_SIDEBAR = document.querySelector('#btn-sidebar');
const SIDEBAR = document.querySelector('#sidebar');
const NAVBAR= document.querySelector('#navbar');

BTN_SIDEBAR.addEventListener('click', event => {
    SIDEBAR.classList.toggle('close');
    NAVBAR.classList.toggle('close');
});

const BTN_NAVBAR = document.querySelector('#btn-navbar');
const NAVBAR_SUB = document.querySelector('#navbar-sub');

BTN_NAVBAR.addEventListener('click', event => {
    BTN_NAVBAR.classList.toggle('rotate');
    NAVBAR_SUB.classList.toggle('show-menu');
});






// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
const BTN_MODAL = document.querySelector('#myBtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
BTN_MODAL.addEventListener('click', event => {
    modal.style.display = "block";
    console.log('ok');
});

// When the user clicks on <span> (x), close the modal
span.addEventListener('click', event => {
    modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', event => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

