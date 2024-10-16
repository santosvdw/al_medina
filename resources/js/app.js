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
