<?php

$name= $_POST['name'];
$visitor_email=$_POST['email'];
$visitor_number=$_POST['number'];
$message=$_POST['message'];

$email_from='admin@mesolithsolutions.com';
$email_subject='New Registration submission';
$email_body="User name:$name.\n". "User Email:$visitor_email.\n". "User Phone_Number:$visitor_number.\n". "User Message:$message.\n";
$to ="info@mesolithsolutions.com";
$headers ="From:$email_from \r\n";
$headers .="Repaly-To:$visitor_email \r\n";
$headers .="content-type:text/html\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html","Location:contact.html");

?>