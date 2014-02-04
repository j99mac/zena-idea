<?php
if (isset($_POST['submit'])) {
$msg = 'Name: ' .$_POST['name'] ."\n"
	.'Email: ' .$_POST['email'] ."\n"
	.'Comment: ' ."\n" .$_POST['comment'];
	mail('example@example.com', Sample Comments', $msg);
	header('location: contact-us-thank-you.html');

) else (
	header('location: contact-us.html');
	exit(0);
?>
