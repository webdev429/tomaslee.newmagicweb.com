<?php $name = $_POST['contactName'];
$email = $_POST['contactEmail'];
echo $name;
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];
$formcontent="From: $name \n Message: $message";
$recipient = "web.dev429@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>