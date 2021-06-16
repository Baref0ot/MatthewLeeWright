
/**********************************
 * 
 * Author: Matthew Wright
 * Description of file: This is the validation for the contact form in 'index.html'
 * 
 * ********************************/

// true = validation passed
// false = validation failed


function allalphabetic(the_string) {
    var letters = /^[a-zA-Z]+$/;
    if (the_string.match(letters)) {
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end allalphabetic

function validate_firstName(the_string) {
    if ((the_string.length > 0) && (allalphabetic(the_string)) && (the_string.length <= 20)) {
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end validate_firstName

function validate_lastName(the_string) {
    if ((the_string.length > 0) && (allalphabetic(the_string)) && (the_string.length <= 20)) {
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end validate_firstName

function validate_Email(the_string) {
    if ((the_string.length > 0) && (the_string.length <= 50) && (the_string.indexOf("@") !== -1) && (the_string.indexOf(".") !== -1)) { // -1 means that the 'indexOf' character either '@' and '.' was not found
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end validate_Email

function validate_PhoneNumber(the_string) {
    if ((the_string.length == 0) || ((the_string.length == 10 || the_string.length == 11) && (!isNaN(the_string)))) {
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end validate_PhoneNumber

function validate_Message(the_string) {
    if ((the_string.length > 0) && (the_string.length <= 400) && allalphabetic(the_string)) {
        return true;
    }// end if
    else {
        return false;
    }// end else
}// end validate_lastName



function validate_input(form) {
    // intializes as empty (0 characters) and as false with no errors.
    var error_message = "";

    if (!validate_firstName(form.firstName.value)) {
        error_message += "- First Name <br/> ";
    }// end if

    if (!validate_lastName(form.lastName.value)) {
        error_message += "- Last Name <br/> ";
    }// end if

    if (!validate_Email(form.email.value)) {
        error_message += "- Email <br/> ";
    }// end if

    if (!validate_PhoneNumber(form.phone.value)) {
        error_message += "- Phone Number <br/> ";
    }// end if

    if (!validate_Message(form.comments.value)) {
        error_message += "- Message Box <br/> "
    }// end if

    // if there is at least 1 character error will be true, execute this if show the error to the user and return false.
    if (error_message.length > 0) {
        // 'Alert.render()' is an instance of the class CustomAlert using the 'render' function from the 'CustomErrorAlert.js' file.
        Alert.render(error_message);
        return false;
    }// end if
    else {
        return true;
    }// end else
}// end validate_Input

