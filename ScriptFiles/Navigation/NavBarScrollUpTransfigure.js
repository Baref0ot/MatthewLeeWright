
/*---CSS class styles located at the following path: 'StyleFiles/JavaScript_Styles/JavaScript_StyleSheet_Classes.css'---*/

window.onscroll = function () {
    //window.requestAnimationFrame(headerSlide_and_change);
    window.requestAnimationFrame(navChangeOnScrollUp);
    window.requestAnimationFrame(navButtonsActiveOnScroll);
}

// allows the "About" navigation button to also scroll to the top of the page on click
document.getElementById("topNav").onclick = function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};

/*--------Allows the Header background to transition colors at the start of the scroll, header logo shift left, and the navigation to fill the remainging space to the right when scrolled off of the 'Top' Section--------*/
function headerSlide_and_change() {
    if (document.body.scollTop > 0 || document.documentElement.scrollTop > 0) {
        // vars
        let headerLogoBackground = document.getElementById("headerLogoBackground");
        let headerLogo = document.getElementById("headerLogo");
        let headerLogoLink = document.getElementById("headerLogoLink");
        let navBarBackground = document.getElementById("navUl");
        /* containerWidth / logoWidth are used to determine what the length of the navigation bar "id='navRaise'" should be to prevent horizontal scroll bar for displaying */
        let containerWidth = document.width;
        let navLength = (containerWidth - 275);
        let navRaise = document.getElementById("navRaise");

        //var headerHeight = headerLogoBackground.offsetHeight;
        //var navRaise = document.getElementById("navRaise");
        headerLogoBackground.classList.remove("headerLogoBackground"); //header background
        headerLogoBackground.classList.add("headerLogoBackGroundTransform"); // replaces headerLogoBackground
        headerLogo.classList.add("headerMove"); //header title slide
        //headerLogoLink.innerHTML = "T.C.F"; //header title change text (uncomment if the logo is text)
        navBarBackground.classList.remove("navUlStyle"); // removes the orignal class with onload background color once the navigation moves into the header
        navBarBackground.classList.add("navUlStyle_removeBackground_color"); // adds class that has transparent background color style once the navigation moves into the header
        
 
        //navRaise.classList.add("navScrollUp_Stick"); //nav to stick to bottom of header no matter the height
        //navRaise.style.top = headerHeight + "px"; 
    } else {
        /*---header background---*/
        let headerLogoBackground = document.getElementById("headerLogoBackground");
        headerLogoBackground.classList.remove("headerLogoBackGroundTransform");
        headerLogoBackground.classList.add("headerLogoBackground");
        /*---header---*/
        let headerLogo = document.getElementById("headerLogo");
        headerLogo.classList.remove("headerMove");
        headerLogo.classList.add("headerLogo");
        //headerLogoLink.innerHTML = "Total Career Freedom"; // (uncomment if the logo is text)
    /*---nav---*/
        let navBarBackground = document.getElementById("navUl");
        navBarBackground.classList.remove("navUlStyle_removeBackground_color"); // removes the orignal class with onload background color once the navigation moves into the header
        navBarBackground.classList.add("navUlStyle"); // adds class that has transparent background color style once the navigation moves into the header
        /*---header link---*/
        //var headerLogoLink = document.getElementById("headerLogoLink");
        //headerLogoLink.style.backgroundColor = "transparent";
        //headerLogoLink.style.padding = "none";
        //headerLogoLink.innerHTML = "Total Career Freedom"
        //headerLogoLink.style.fontSize = "40px";
        //headerLogoLink.style.color = "grey";
    }// end else
}// end navChangeOnScrollUp


/*--------Allows the Navigation Bar to transition to white when scrolled off of the 'Top' Section--------*/
function navChangeOnScrollUp() {
    if (document.body.scollTop > 720 || document.documentElement.scrollTop > 720) {
        let headerLogoBackground = document.getElementById("headerLogoBackground");
        headerLogoBackground.classList.remove("headerLogoBackgroundTransform");
        headerLogoBackground.classList.add("headerLogoBackGroundTransform_changeBackground_color");

        // gets all the nav links by class name and changes their color 
        let navLinksArray = document.getElementsByClassName("navLinkStyle");
        let arrLength = navLinksArray.length;
        console.log(navLinksArray);
        for (let i = 0; i < arrLength; i++) {
            navLinksArray[i].style.color = "#253c54";
            navLinksArray[i].style.textDecorationColor = "#253c54";
        }// end for


        //var navUl = document.getElementById('navUl');
        //navUl.classList.remove('navUlStyle'); // remove original class style
        //navUl.classList.add('navScrollUpShift_Color_Size'); // adds new style
    } else {
        let headerLogoBackground = document.getElementById("headerLogoBackground");
        headerLogoBackground.classList.remove("headerLogoBackGroundTransform_changeBackground_color");
        headerLogoBackground.classList.add("headerLogoBackgroundTransform");
        // gets all the nav links by class name and reverts their color to the original
        let navLinksArray = document.getElementsByClassName("navLinkStyle");
        let arrLength = navLinksArray.length;
        console.log(navLinksArray);
        for (let i = 0; i < arrLength; i++) {
            navLinksArray[i].style.color = "white";
            navLinksArray[i].style.textDecorationColor = "white";
        }// end for

        //var navUl = document.getElementById('navUl');
        //navUl.classList.remove('navScrollUpShift_Color_Size'); // removes the added style class found at specified path
        //navUl.classList.add('navUlStyle'); // adds the original class
    }// end else
}// end navChangeOnScrollUp


/*--------Allows the Navigation Buttons to become Active with an underline when scrolling--------*/
function navButtonsActiveOnScroll() {                       
    if (document.body.scollTop < 650 || document.documentElement.scrollTop < 650) { // Top Button
        // vars
        let topNav = document.getElementById("topNav");
        let servicesNav = document.getElementById("servicesNav");
        let contactNav = document.getElementById("contactNav");
        topNav.classList.add("navButtonOnActiveStyle"); // button to be active
        servicesNav.classList.remove("navButtonOnActiveStyle"); // not active
        contactNav.classList.remove("navButtonOnActiveStyle"); // not active
    }// end if                           
    if (document.body.scollTop > 650 || document.documentElement.scrollTop > 650) { // Services Button
       // vars
       let topNav = document.getElementById("topNav");
       let servicesNav = document.getElementById("servicesNav");
       let contactNav = document.getElementById("contactNav");
       topNav.classList.remove("navButtonOnActiveStyle"); // not active
       servicesNav.classList.add("navButtonOnActiveStyle"); // button to be active
       contactNav.classList.remove("navButtonOnActiveStyle"); // not active
   }// end if                           
    if (document.body.scollTop > 1650 || document.documentElement.scrollTop > 1650) { // Contact Button
        // vars
        let topNav = document.getElementById("topNav");
        let servicesNav = document.getElementById("servicesNav");
        let contactNav = document.getElementById("contactNav");
        servicesNav.classList.remove("navButtonOnActiveStyle"); // not active
        topNav.classList.remove("navButtonOnActiveStyle"); // not active
        contactNav.classList.add("navButtonOnActiveStyle"); // button to be active
    }// end if
}// end navChangeOnScrollUp


