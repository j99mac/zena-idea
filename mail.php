<<?php

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$todayis = date("l, F j, Y, g:i a") ;
$subject = "A message sent on ".$todayis." from ".$name." via the playatics website";
$message = " Message: $comment \r \n From: $name  \r \n Reply to: $email";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Domain Name j99mac@yahoo.com' . "\r\n";   

mail("j99mac@yahoo.com", $subject, $message, $headers);


echo "<br/> Thanks for your message: <b>$message</b>";

?>
