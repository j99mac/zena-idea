<?php
if (isset($_POST['submit'])) {
$msg = 'Name: ' .$_POST['name'] ."\n"
	.'Email: ' .$_POST['email'] ."\n"
	.'Message: ' ."\n" .$_POST['message'];
	mail('j99mac@yahoo.com', Sample Comments', $msg);
	header('location: contact-us-thank-you.html');

) else (
	header('location: contact.html');
	exit(0);
?>
