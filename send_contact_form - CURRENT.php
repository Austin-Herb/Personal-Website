<?php

// Check if the submit button has been pressed
if(isset($_POST['submit'])){
    $firstName      = $_POST['firstName'];
    $lastName       = $_POST['lastName'];
    $companyName    = $_POST['companyName'];
    $emailFrom          = $_POST['email'];
    $phone          = $_POST['phone'];
    $subject        = $_POST['subject'];
    $comments       = $_POST['comments'];

    $emailTo = "austinherb@aherb.info";
    $headers = "From: ".$emailFrom;
    $txt = "You've recieved a contact form submission from: ".$firstName." ".$lastName."\n\n".$comments;


    // Call the mail function
    mail($emailTo, $subject, $txt, $headers);
    // Return the user to the intext page once sent
    header("Location: index.php?mailsend");
}

?>