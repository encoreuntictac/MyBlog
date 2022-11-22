const BTN_EXTEND = document.querySelector('#btn-extend');
const SIDEBAR = document.querySelector('#sidebar');

BTN_EXTEND.addEventListener('click', event => {
    SIDEBAR.classList.toggle('active');
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

