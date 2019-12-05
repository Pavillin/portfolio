<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

//Check if a mobile number was entered
if($mobile == NULL){
  $mobile = "No mobile number provided";
}

$mailTo = "contact@deadfyre.com";
$headers = "From: ".$mailTo;
$txt = "New email from contact form. \n 
        Name: ".$name."\n
        Email: ".$email."\n
        Mobile: ".$mobile."\n\n"
        .$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: /contact");
}

?>