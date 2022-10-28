<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.titan.email";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "contacto@radac.com.mx";
$mail->Password = "$Radac2022$";

$mail->setFrom($email, $name);
$mail->addAddress("roberto@example.com", "Dave");

$mail->Subject = "Contacto pagina web";
$mail->Body = $message;

$mail->send();

header("Location: sent.html");

?>