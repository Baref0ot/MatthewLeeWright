
/*--------Allows the 'Top' Navigation Button to become Active with an underline when clicked--------*/
function activeHold_TopNav() {
    // vars
    var topNav = document.getElementById("topNav");
    var servicesNav = document.getElementById("servicesNav");
    var contactNav = document.getElementById("contactNav");
    // Button to be active 
    topNav.classList.add("navButtonOnActiveStyle");
    //Buttons to be unactive 
    servicesNav.classList.remove("navButtonOnActiveStyle");
    contactNav.classList.remove("navButtonOnActiveStyle");
}// end ActiveHold_TopNav

/*--------Allows the 'Services' Navigation Button to become Active with an underline when clicked--------*/
function activeHold_ServicesNav() {
    // vars
    var topNav = document.getElementById("topNav");
    var servicesNav = document.getElementById("servicesNav");
    var contactNav = document.getElementById("contactNav");
    // Button to be active 
    servicesNav.classList.add("navButtonOnActiveStyle");
    // Buttons to be unactive 
    contactNav.classList.remove("navButtonOnActiveStyle");
    topNav.classList.remove("navButtonOnActiveStyle");
}// end ActiveHold

/*--------Allows the 'Contact' Navigation Button to become Active with an underline when clicked--------*/
function activeHold_ContactNav() {
    // vars
    var topNav = document.getElementById("topNav");
    var servicesNav = document.getElementById("servicesNav");
    var contactNav = document.getElementById("contactNav");
    // Button to be active 
    contactNav.classList.add("navButtonOnActiveStyle");
    // Buttons to be unactive 
    topNav.classList.remove("navButtonOnActiveStyle");
    servicesNav.classList.remove("navButtonOnActiveStyle");
}// end ActiveHold_ContactNav

// html body onload set first page to display active navigation button state
document.getElementById("body").onload = function () {
    activeHold_TopNav();
}// end docutment.getElement