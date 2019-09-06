<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $messageSubject = $_POST['title'];
    $message = $_POST['message'];

    $mailTo = "ayobamisodiq68@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $messageSubject, $txt, $headers);
    echo "Mail Sent. Thank you " . $name . ", we will get back to you shortly.";
   // header("Location: sodiq.html?mailsend");

}