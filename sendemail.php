<?php
$to      = 'will@antlerretail.com';
$subject = 'coming soon signup';
$message = $_GET["email"];
$headers = 'From: ' . $_GET["email"] . "\r\n" .
    'Reply-To: webmaster@antlerretail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 