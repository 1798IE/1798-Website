<?php

$name=$_Post['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$priority = $_POST['priority'];

$email_from = 'info@1798.com';
$email_subject = "1798 Website Contact";
$email_body = "Username:$name.\n".
	"User email: $visitor_email.\n".
	"User Priority: $priority.\n".
	"User Message: $message.\n";

$to = "cormacfarrell@1798.ie";

$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visistor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header ("Location: contact.html");

?>