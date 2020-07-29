<?php
    $title = "Rolling Hills Estates: Contact Form Sent";
    include 'includes/header.inc.php';
    use Twilio\Rest\Client;

?>
<?php


if(isset($_POST['contact_email']) || isset($_SESSION['UserEmail']) || isset($_SESSION['AdminEmail'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "maintenancemanaustin@gmail.com";
    $email_subject = "Contact Form Submission";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please ";
        echo "<a href='contact.php'>go back </a>";
        echo "and correct these errors";
        die();
    }
 
    // Create corresponding variables if session variables have been set
    // First Name
    if(isset($_SESSION['UserFirstName'])){
        $firstName = $_SESSION['UserFirstName'];
    } else if(isset($_SESSION['AdminFirstName'])){
        $firstName = $_SESSION['AdminFirstName'];
    } else if(isset($_POST['contact_first_name'])){
        $firstName = $_POST['contact_first_name'];
    }

    // Last Name
    if(isset($_SESSION['UserLastName'])){
        $lastName = $_SESSION['UserLastName'];
    } else if(isset($_SESSION['AdminLastName'])){
        $lastName = $_SESSION['AdminLastName'];
    } else if(isset($_POST['contact_last_name'])){
        $lastName = $_POST['contact_last_name'];
    }

    // Email Address
    if(isset($_SESSION['UserEmail'])){
        $email_from = $_SESSION['UserEmail'];
    } else if(isset($_SESSION['AdminEmail'])){
        $email_from = $_SESSION['AdminEmail'];
    } else if(isset($_POST['contact_email'])){
        $email_from = $_POST['contact_email'];
    }

    // Telephone Number
    if(isset($_SESSION['UserTelephone'])){
        $telephone = $_SESSION['UserTelephone'];
    } else if(isset($_SESSION['AdminTelephone'])){
        $telephone = $_SESSION['AdminTelephone'];
    } else if(isset($_POST['contact_telephone'])){
        $telephone = $_POST['contact_telephone'];
    }

    // Create the remaining fields
    $address = $_POST['contact_address'];
    $comments = $_POST['contact_comments'];
 
    // validation expected data exists
    if(!isset($firstName) ||
        !isset($lastName) ||
        !isset($email_from) ||
        !isset($telephone) ||
        !isset($address) ||
        !isset($comments)) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    
        $string_exp = "/^[A-Za-z .'-]+$/";
    
    if(!preg_match($string_exp,$firstName)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }
    
    if(!preg_match($string_exp,$lastName)) {
        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    // Invalid telephone number format
    $telephone_exp = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im";

    if(!preg_match($telephone_exp, $telephone)) {
      $error_message .= 'The phone number you have entered does not appear to be valid.<br />';
    }

    if($address == ""){
        $error_message .= 'You must enter an address.<br />';
    }
    
    if(strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    
        $email_message = "Form details below.\n\n";
    
        
        function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
        }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

// Send a confirmation email to the user
$email_confirmation = "Form details below.\n\n";
$email_confirmation .= "First Name: ".$firstName."\n";
$email_confirmation .= "Last Name: ".$lastName."\n";
$email_confirmation .= "Email: ".$email_from."\n";
$email_confirmation .= "Telephone: ".$telephone."\n";
$email_confirmation .= "Address: ".$address."\n";
$email_confirmation .= "Comments: ".$comments."\n\n";
$email_confirmation .= "Thank you for contacting Rolling Hills Estates!\n";
$email_confirmation .= "We will get back to you as soon as possible, thank you for your patience.\n";
$email_confirmation .= "For emergencies, please contact:\n";
$email_confirmation .= "Office: 717-218-1062";
$email_confirmation .= "Maintenance: 717-462-5751";

 
// create email headers
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_from, $email_subject, $email_confirmation, $headers);



// Send a confirmation text
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC4bcc65babd8b4d9bc81b196a9f52930f';
$token = '620041ef84ae04274c792450fe81ba60';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $telephone,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+17175029698',
        // the body of the text message you'd like to send
        'body' => "Thank you for contacting Rolling Hills Estates! We will get back to you as soon as possible.\nEmergency Contacts:\nOffice: 717-218-1062\nMaintenance: 717-462-5751"
    )
);

?>
 
<!-- Display the contents of the success page -->
<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Thank you for your comments</h1>
        <p class="lead">A member of our staff will contact you as soon as possible</p>
        <!-- Close container -->
    </div>
    <!-- Close jumbotron -->
</div>

<!-- Redirect the user tot he home page -->
<a href="index.php" title="Return Home">Return Home</a>
 
<?php
 
}
?>


<?php
    include 'includes/footer.inc.php';
?>