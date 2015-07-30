<?php


$name = $_POST]['name'];
$email = $_POST]['email'];
$message = $_POST]['message'];

$header = "From:" .$email . "\r\n";
$header .= "X-mailer: PHP /" . phpversion() . "\r\n";
$header .= "Mime Version: 1.0 \r\n";
$header .= "Content Type: text/plain";

$comment = "This message has been sent by " . $name .  "\r\n";
$comment .= "Email is ". $email . "\r\n";
$comment .= "The message is: '$message' . "\r\n";

$for = "ttwine36@gmail.com";
$subject = "Contact from website";

mail($subject, utf8_decode($comment), header );

email json_encode(array(
	'Message' => sprintf("Your message has been sent %s", $name);
));
