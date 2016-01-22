<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$TO = 'udaysy007@gmail.com';
$SUBJECT ='website message'
$MSG =$name, ' ', $email, ' ', $message;
mail($TO,$SUBJECT,$MSG);
?>
