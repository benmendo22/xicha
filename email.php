<?php


// If you are not using Composer (recommended)
require("sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "benmendo22@hotmail.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "ben.m.mendoza@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
//$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>