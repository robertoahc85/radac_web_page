<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "josello93@gmail.com";
$subject = "Email del sitio web";
$txt ="Nombre = ". $name . "\r\n  Email = " . $email . "\r\n Mensaje =" . $message;
$headers = "From: noreply@radac.com.mx" . "\r\n" .
"CC: ventas@radac.com.mx";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:sent.html");
?>