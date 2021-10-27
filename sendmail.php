<?php
$email_to = "epas001@hotmail.com";
$name = $_POST["name"];
$email_from = "admin@ericmpastore.com";
$reply_to = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Feedback from website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $reply_to . "\n";
$message = "Name: ". $name . "\r\nMessage: " . $message;
ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent) { header("Location: http://www.ericmpastore.com/thankyou.html"); }
else { echo "There has been an error sending your comments. Please try later or email admin@ericmpastore.com for support."; }
?>
    