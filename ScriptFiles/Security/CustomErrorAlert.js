
// CustomAlert is a class
function CustomAlert() {

    this.render = function (errors) {
        // these values position the alert box on the page
        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        // creating variable references of the Ids in the DOM
        var dialogOverlay = document.getElementById('dialogOverlay');
        var dialogBox = document.getElementById('dialogBox');
        // DialogOverlay
        dialogOverlay.style.display = "block";
        dialogOverlay.style.height = winHeight + "px";
        // DialogBox
        dialogBox.style.display = "block";
        dialogBox.style.left = (winWidth / 2) - (450 * .5) + "px";
        dialogBox.style.top = "100px";
        // Dialog head, body, and footer
        document.getElementById("dialogBoxHead").innerHTML = "Contact Form Errors";
        document.getElementById("dialogBoxDirections").innerHTML = "Please fix the following: ";
        document.getElementById("dialogBoxBody").innerHTML = errors;
        document.getElementById("dialogBoxFooter").innerHTML = " <button class='buttonStyle' onclick='Alert.ok()'> Ok </button>";
    }// end this.render

    this.ok = function () {
        // creating variable references of the Ids in the DOM
        var dialogOverlay = document.getElementById('dialogOverlay');
        var dialogBox = document.getElementById('dialogBox');
        dialogBox.style.display = "none";
        dialogOverlay.style.display = "none";
    }// end this.ok

}// end Class

// this is an instance of the CustomAlert Object
var Alert = new CustomAlert();