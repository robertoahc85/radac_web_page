<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
// $to = "ventas@radac.com.mx";
$to = "robertocapi36@gmail.com";
// $subject = "Contacto del sitio web";
$subject = 'Contacto del sitio web'. $name;
// $txt ="Nombre = ". $name . "\r\n  Email = " . $email . "\r\n Mensaje =" . $message;
$txt ="Nombre = ". $name . "\r\n  Email = " . $email ."\r\nTelefono = " . $phone . "\r\n Mensaje =" . $message;
$headers = "From: noreply@radac.com.mx" . "\r\n" .
"CC:josello93@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:sent.html");
?>