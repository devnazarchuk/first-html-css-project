<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_form = 'yoursite@example.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Phone: $phone.\n".
"User Message: $message.\n";

$to = 'yoursite@example.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>