// write a function that toggles the visibility of a div
// add an event listener to the button that calls the function
document
    .getElementById("toggle-visibility")
    .addEventListener("click", toggleVisibility);

function toggleVisibility() {
    console.log("Toggle visibility");
    let element = document.querySelector("#nav-menu-list-element");
    if (element.classList.contains("hidden")) {
        element.classList.remove("hidden");
    }
    if (element.classList.contains("open")) {
        element.classList.remove("open");
        element.classList.add("close");
    } else {
        element.classList.remove("close");
        element.classList.add("open");
    }
}

let vraag = 0;

function set_vraag() {
    vraag = 1;
}

let afspraakButton = document.querySelector("#changeTypeAfspraak");
let vraagButton = document.querySelector("#changeTypeVraag");



document.querySelectorAll(".contact-form-type button").forEach((button) => {
    button.addEventListener("click", function (event) {
        event.preventDefault();
    });
});

// document.querySelectorAll("#send-message").forEach((button) => {
//     button.addEventListener("click", function (event) {
//         event.preventDefault();
//     });
// });

document.querySelectorAll("#changeTypeAfspraak").forEach((button) => {
    button.addEventListener("click", changeTypeAfspraak);
});

document.querySelectorAll("#changeTypeVraag").forEach((button) => {
    button.addEventListener("click", changeTypeVraag);
});

function changeTypeAfspraak() {
    vraag = 0;
    document.querySelector("#introductie-tekst").innerHTML =
    "In welke behandeling(en) heeft u interesse?";
    document.querySelector("#opmerkingen").innerHTML =
    "Heeft u nog opmerkingen of vragen?";
    if (afspraakButton.classList.contains("active")) {
        afspraakButton.classList.remove("active");
        vraagButton.classList.add("active");
    } else {
        vraagButton.classList.remove("active");
        afspraakButton.classList.add("active");
    }
}

function changeTypeVraag() {
    vraag = 1;
    document.querySelector("#introductie-tekst").innerHTML =
        "Waar gaat uw vraag over?";
    document.querySelector("#opmerkingen").innerHTML = "Wat is uw vraag over onze behandelingen?";

    if (afspraakButton.classList.contains("active")) {
        afspraakButton.classList.remove("active");
        vraagButton.classList.add("active");
    } else {
        vraagButton.classList.remove("active");
        afspraakButton.classList.add("active");
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

document.getElementById("opmerkingen").addEventListener("change", function (event) {
    console.log("Opmerkingen:", event.target.value);
});

document.querySelector("#send-message").addEventListener("click", sendMessage);

// document.querySelector("#send-message").

function sendMessage() {
    console.log("Send message");
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
        if (opmerkingen == "") {
            message = `Hallo! Mijn naam is ${naam} ${behandelingenstring}.`;
        } else {
            message = `Hallo! Mijn naam is ${naam} ${behandelingenstring}. Ik heb nog wel een vraag/opmerking: ${opmerkingen}`;
        }
    } else {
        message = `Hallo! Mijn naam is ${naam} ${behandelingenstring}. ${opmerkingen}`;
    }

    // replace all spaces with %20
    message = message.replace(/ /g, "%20");

    // Go to url
    window.location.href = `https://api.whatsapp.com/send?phone=31648713668&text=${message}`;
}
