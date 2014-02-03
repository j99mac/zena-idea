<<?php

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

mail("j99mac@gmail.com", $name, $email, $message);


echo "<br/> Thanks for your message: ;

?>
