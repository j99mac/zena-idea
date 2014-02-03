<<?php

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

mail("j99mac@gmail.com", $subject, $message, $headers);


echo "<br/> Thanks for your message: ;

?>
