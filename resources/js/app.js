// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

let vraag = 0;

document.querySelectorAll(".contact-form-type button").forEach((button) => {
    button.addEventListener("click", function (event) {
        event.preventDefault();
    });
});

document.querySelectorAll(".changeTypeAfspraak").forEach((button) => {
    button.addEventListener("click", changeTypeAfspraak);
});

function changeTypeAfspraak() {
    vraag = 0;
    document.querySelector("#introductie-tekst").innerHTML =
        "In welke behandeling(en) heeft u interesse?";
    document.querySelector("#opmerkingen").innerHTML =
        "Heeft u nog opmerkingen of vragen?";
    console.log("Afspraak maken");
}

function changeTypeVraag() {
    vraag = 1;
    document.querySelector("#introductie-tekst").innerHTML =
        "Waar gaat uw vraag over?";
    document.querySelector("#opmerkingen").innerHTML = "Wat is uw vraag?";
    console.log("Vraag stellen");
}

changeTypeAfspraak();

// write a function that toggles the visibility of a div
// add an event listener to the button that calls the function
document
    .getElementById("toggle-visibility")
    .addEventListener("click", toggleVisibility);

function toggleVisibility() {
    console.log("toggleVisibility");
    let element = document.getElementById("nav-menu-list-element");
    if (element.classList.contains("open")) {
        element.classList.remove("open");
        element.classList.add("close");
    } else {
        element.classList.remove("close");
        element.classList.add("open");
    }
}

// Write a function that changes based on the value of a radio input field
// add an event listener to the radio input field that calls the function
document.querySelectorAll(".contact-type").forEach((radio) => {
    radio.addEventListener("change", changeValue);
});

function changeValue(event) {
    console.log("Selected value:", event.target.value);
    if (event.target.value === "afspraak") {
        changeTypeAfspraak();
    } else {
        changeTypeVraag();
    }
}

// Write a function that adds the values of checkboxes to a list. All the checkboxes have a name attribute of 'bahenadeling'
// Write the code here
document.querySelectorAll(".behandeling").forEach((checkbox) => {
    checkbox.addEventListener("change", addToList);
});

let behandelingen = [];

function addToList(event) {
    console.log("Selected value:", event.target.value);
    behandelingen.push(event.target.value);
    // behandelingen.map((behandeling) => {
    //     console.log(behandeling);
    // });
}

document.querySelector("#send-message").addEventListener("click", sendMessage);

function sendMessage() {
    let naam = document.getElementById("naam").value;
    let opmerkingen = document.getElementById("opmerkingen_value").value;
    console.log("Naam:", naam);
    console.log("Opmerkingen:", opmerkingen);
    console.log("Behandelingen:");
    behandelingen.map((behandeling) => {
        console.log(behandeling);
    });

    let behandelingenstring;

    if (vraag) {
        if (behandelingen.length === 0) {
            behandelingenstring = `en ik heb een vraag`;
        } else if (behandelingen.length === 1) {
            behandelingenstring = `en ik heb een vraag over ${behandelingen[0]}`;
        } else if (behandelingen.length === 2) {
            behandelingenstring = `en ik heb een vraag over ${behandelingen[0]} en ${behandelingen[1]}`;
        } else if (behandelingen.length === 3) {
            behandelingenstring = `en ik heb een vraag over ${behandelingen[0]}, ${behandelingen[1]} en ${behandelingen[2]}`;
        } else if (behandelingen.contains("overige")) {
            behandelingenstring = `en ik heb een vraag`;
        }
    } else {
        if (behandelingen.length === 0) {
            behandelingenstring = `en ik wil een afspraak maken`;
        } else if (behandelingen.length === 1) {
            behandelingenstring = `en ik wil een afspraak maken voor ${behandelingen[0]}`;
        } else if (behandelingen.length === 2) {
            behandelingenstring = `en ik wil een afspraak maken voor ${behandelingen[0]} en ${behandelingen[1]}`;
        } else if (behandelingen.length === 3) {
            behandelingenstring = `en ik wil een afspraak maken voor ${behandelingen[0]}, ${behandelingen[1]} en ${behandelingen[2]}`;
        } else if (behandelingen.contains("overige")) {
            behandelingenstring = `en ik wil een afspraak maken`;
        }
    }

    let message;

    if (vraag === 0) {
        message = `Hallo! Mijn naam is ${naam} ${behandelingenstring}. Ik heb nog wel een vraag/opmerking: ${opmerkingen}`;

    } else {
        message = `Hallo! Mijn naam is ${naam} ${behandelingenstring}. ${opmerkingen}`;
    }

    // replace all spaces with %20
    message = message.replace(/ /g, "%20");

    // Go to url
    window.location.href = `https://api.whatsapp.com/send?phone=31648713668&text=${message}`
}
