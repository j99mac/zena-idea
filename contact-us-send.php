<?php
if (isset($_GET['submit'])) {
$msg = 'Name: ' .$_GET['name'] ."\n"
	.'Email: ' .$_GET['email'] ."\n"
	.'Comment: ' ."\n" .$_GET['comment'];
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