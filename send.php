<?php 
    $page = "";
    $template = 'contact';
    $title = 'contact';
    $subtitle = 'Submitting Form ---';
    $heading = 'Contact Form Submission';

include_once('templates/header.php'); ?>


<div class="row pb-30">
              <div class="container contact-form-results">
                  <p class="pt-30">


              <?php

if(isset($_POST['customer_mail'])){
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "duress@wwsinternational.net";
    $email_subject = "New message from Contact Form!";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        echo "</p></div>";
        echo "</div>";
        include_once('templates/footer.php');
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['customer_mail']) || !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     

    $email_from = $_POST['customer_mail']; // required
    $message = $_POST['message']; // required
    $name = $_POST['name'];
    $phone = $_POST['phone_number'];
    $organisation = $_POST['organisation'];
    $location = $_POST['location'];
    if(isset($_POST['info'])):
    $info = $_POST['info'];
    endif;
    $subject = $_POST['subject'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    
    if(strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }
    
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    
    $email_message = "Contact Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone Number: ".clean_string($phone)."\n";
    $email_message .= "Organisation Name: ".clean_string($organisation)."\n";
    $email_message .= "Location/Address: ".clean_string($location)."\n";
    $email_message .= "Information On: "."\n";

    $infos = $_POST['info'];
    $N = count($infos);

    for($i = 0; $i < $N; $i++) {

        $email_message .= clean_string($infos[$i]). ", ";
    }

    $email_message .= "\n"."Message: ".clean_string($message)."\n";
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);  


    ?>
    
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
    <?php
}
    ?>               
    </p>
              </div>
        </div>




    <?php include_once('templates/footer.php'); ?>
