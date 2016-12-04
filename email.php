<?php


// If you are not using Composer (recommended)
require("sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "benmendo22@hotmail.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "test@example.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>