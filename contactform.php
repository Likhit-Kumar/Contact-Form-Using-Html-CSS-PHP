<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $phn = $_POST['phn'];
    $message = $_POST['message'];

    $mailTo = "portoliosa@hotmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo,$phn,$txt,$headers);
    header("Location: index.html?mailsend");
}

?>