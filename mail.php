<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailadress'];
$message= $_POST['message'];
$number= $_POST['mobile'];

$to = "aliebonglucrece123@mail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>