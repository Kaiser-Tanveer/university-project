<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['message'];

$email_from = 'kaisertanveer0@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $mane.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                "User Message: $messege.\n";


$to = 'kaisertanveer0@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header(Location: contact.html)

?>