$(document).ready(function () {
    $(document).on('click', '#submit', function (e) {
        //stops the submit from functioning normal
        e.preventDefault();

        //Global variables

        var elEmail = document.getElementById('email');
        var elErrorEmail = document.getElementById('errorEmail');

        var elFirstName = document.getElementById('firstname'); //input element --> id
        var elErrorFirstName = document.getElementById('errorFirstName'); //div error element --> id

        var elLastName = document.getElementById('lastname'); //input element --> id
        var elErrorLastName = document.getElementById('errorLastName'); //div error element --> id

        var elMessage = document.getElementById('message'); //textarea element --> id
        var elErrorMessage = document.getElementById('errorMessage'); //div error element --> id

        var elSubmit = document.getElementById('submit');

        //Event Listener
        elEmail.addEventListener('blur', validateEmail, false);
        elFirstName.addEventListener('blur', validateFirstName, false);
        elLastName.addEventListener('blur', validateLastName, false);
        elMessage.addEventListener('blur', validateMessage, false);
        elSubmit.addEventListener('click', validateForm, false);

        //Email validation function
        function validateEmail() {
            var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (elEmail.value == "") {
                //alert("Email address missing");
                elErrorEmail.innerHTML = "<p class=\"alert alert-danger\">You must enter an email address.</p>";
                return false;
            } else if (!elEmail.value.match(regEmail)) {
                elErrorEmail.innerHTML = "<p class=\"alert alert-danger\">You must enter a valid email address.</p>";
                return false;
            } else {
                elErrorEmail.innerHTML = "";
            }
        }

        //Firstname validation function
        function validateFirstName() {
            if (elFirstName.value == "") {
                //alert("Email address missing");
                elErrorFirstName.innerHTML = "<p class=\"alert alert-danger\">You must enter a first name.</p>";
                return false;
            } else {
                elErrorFirstName.innerHTML = "";
            }
        }

        //Lastname validation function
        function validateLastName() {
            if (elLastName.value == "") {
                //alert("Email address missing");
                elErrorLastName.innerHTML = "<p class=\"alert alert-danger\">You must enter a last name.</p>";
                return false;
            } else {
                elErrorLastName.innerHTML = "";
            }
        }

        //Message validation function
        function validateMessage() {
            if (elMessage.value == "") {
                //alert("Email address missing");
                elErrorMessage.innerHTML = "<p class=\"alert alert-danger\">You must enter a message.</p>";
                return false;
            } else {
                elErrorMessage.innerHTML = "";
            }
        }

        //Form validation function
        function validateForm() {
            if (validateEmail() && validateFirstName() && validateLastName() && validateMessage()) {
                return true;
            } else {
                return false;
            }

        }

    }); // end onclick submit

}); //end ready function