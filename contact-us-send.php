<?php
if (isset($_POST['submit'])) {
$msg = 'Name: ' .$_POST['name'] ."\n"
	.'Email: ' .$_POST['email'] ."\n"
	.'Comment: ' ."\n" .$_POST['comment'];
	mail("j99mac@gmail.com', Sample Comments', $msg);
	header('location: contact-us-thank-you.html');	
 	echo "Thank you for sending us feedback";
  	}
	else
  	{
  	echo "Please enter your email address to send feedback";
  	}
	exit(0);
?>