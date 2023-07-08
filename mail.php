<?php


$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "jayambesanitaryware01@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@jayambesanitaryware.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:extra.html");
?>