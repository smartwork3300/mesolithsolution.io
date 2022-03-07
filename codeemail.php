<?php

if(isset($_POST['submit'])){
    $name=$_pOST['name'];
    $emailform=$_pOST['email'];
    $phonenumber=$_pOST['number'];
    $message=$_pOST['message'];
    
$mailTo="info@mesolithsolutions.com";
$headers="From: ".$mailFrom;
$txt="you have received an e-mail from ".$name.".\n\n.$message;

    mail($mailTo,$emailform,$phonenumber,$txt,$headers);
    header(Location:index.php?mailsend");
}
?>