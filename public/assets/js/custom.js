

function openHeaderMenu() {
    document.getElementById('header-mobile-menu').className = "mobile-settings show";
}

function closeHeaderMenu() {
    document.getElementById('header-mobile-menu').className = "mobile-settings";
}

function onchangeFilterClick() {
    d = document.getElementById("integration-select").value;

    var allElements = [
        'pills-all',
        'pills-accounting',
        'pills-fulfillment',
        'pills-e-commerce',
        'pills-shipping',
        'pills-payment',
    ];

    for(var i=0; i<allElements.length; i++)
    {
        document.getElementById(allElements[i]).className = "tab-pane ";
    }
    document.getElementById(d).className = "tab-pane active";

}

function flip() {
    document.getElementById('contact-form').className = document.getElementById('contact-form').className + " active";
    document.getElementById('contact-form-success').className = document.getElementById('contact-form-success').className + " active";
}

function flipRegisterForm() {
    document.getElementById('early-form').className = document.getElementById('early-form').className + " active";
    document.getElementById('early-form-success').className = document.getElementById('early-form-success').className + " active";
}