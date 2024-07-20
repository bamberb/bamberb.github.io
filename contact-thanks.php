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