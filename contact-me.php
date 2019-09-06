<?php

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $mailFrom = $_GET['email'];
    $messageSubject = $_GET['title'];
    $message = $_GET['message'];

    $mailTo = "ayobamisodiq68@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $messageSubject, $txt, $headers);
    echo "Mail Sent. Thank you " . $name . ", we will get back to you shortly.";
   // header("Location: sodiq.html?mailsend");

}