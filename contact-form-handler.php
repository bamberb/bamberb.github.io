<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mr.ben.bamber@gmail.com";
    $email_subject = "New Contact Form Submission";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone1']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone1']; // not required
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
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
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!DOCTYPE html>
<html lang="en">

<?php require 'header.php';?>

<!-- Main Content -->
<div class="grid10 first">
<h2>Your message has been received! We aim to reply within 24hrs.</h2>
</div>


<div class="grid10 first">
<div id="bigimg">
	<img src="./img/04.jpg" alt="image" />
</div>
</div>

<div class="grid5 first">
<div id="contactform">
<h1>Contact Form</h1>

<div id="form-div" class="top-buffer">
<form method="post" name="contact_form" action="contact-form-handler.php" class="form" id="contact">
<p class="name">
	<input name="name" type="text" class="feedback-input" id="name" placeholder="Name" required />
</p>
<p class="email">
<input name="email" type="email" class="feedback-input" id="email" placeholder="Email" required />
</p>
<p class="phone1">
<input name="phone1" type="phone1" class="feedback-input" id="phone1" placeholder="Contact Number" />
</p>
<p class="text">
<input name="message" type="textarea" class="feedback-input" id="message" placeholder="Message" required />
</p>
<!--
<p class="text">
<div class="g-recaptcha" data-sitekey="6LfNKAATAAAAACUv5q_e-GkfOHTgZkJRvDpBddwA"></div>
</p>-->
<div class="submit">
<input type="submit" value="SEND" id="button-blue"/>
<div class="ease"></div>
</div>
</form>
</div>


</div>
</div>


<div class="grid5">
<div id="contactother">
<h1>Useful Information</h1>

<div class="grid5 first">
<div id="usefulinfo1">
Opening Hours:<br><br><br>
Phone Number:<br><br>
Fax Number:<br><br>
Postal Address:<br><br>
</div>
</div>

<div class="grid5">
<div id="usefulinfo2">
Monday - Friday<br>
8:30am - 5:00pm<br><br>
01271 323235<br><br>
01271 323234<br><br>
Unit 4 Gratton Court<br>
Gratton Way<br>
Roundswell<br>
Devon<br>
EX31 3NL<br>
UK</h2>
</div>
</div>

</div>
</div>

<?php require 'footer.php';?>
 
<?php
 
}
?>