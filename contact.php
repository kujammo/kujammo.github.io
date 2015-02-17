<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$inquiry = $_POST['message'];

$to = "ajammon1@gmail.com";
$subject = "new contact form submission";
 $message = "A visitor of americandisabilitysolutions has submitted the following requirements. \n\n: $name\n\nEmail: $email\n\ninquiry: $inquiry\n\nPlease responsd to this message within 24 hours. ";

mail($to,$subject,$message);
header("Location:test.php");




?>