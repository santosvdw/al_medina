// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

document.querySelectorAll(".contact-form-type button").forEach((button) => {
    button.addEventListener("click", function (event) {
        event.preventDefault();
    });
});

document.querySelectorAll(".changeTypeAfspraak").forEach((button) => {
    button.addEventListener("click", changeTypeAfspraak());
});

function changeTypeAfspraak() {
    console.log("Afspraak maken");
}

function changeTypeVraag() {
    console.log("Vraag stellen");
}

// write a function that toggles the visibility of a div
// add an event listener to the button that calls the function
document.getElementById("toggle-visibility").addEventListener("click", toggleVisibility);

function toggleVisibility() {
    console.log("toggleVisibility");
    let element = document.getElementById("nav-menu-list-element");
    if (element.classList.contains("open")) {
        element.classList.remove("open");
        element.classList.add("close");
    }
    else {
        element.classList.remove("close");
        element.classList.add("open");
    }
}