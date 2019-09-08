<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $messageSubject = $_POST['title'];
    $message = $_POST['message'];

    $filename = "myData.txt";
    $f_data = '
    Name: '.$name.'
    Email: '.$mailFrom.'
    Subject: '.$messageSubject.'
    Message: '.$message.'
    ===============================
    ========
    ';
    echo "Message saved. Thank you " . $name . ", we will contact you shortly. <a href=\"sodiq.html\">Back Home</a>";
    
    $file = fopen($filename, "a");
    fwrite($file,$f_data);
    fclose($file);

    //$mailTo = "ayobamisodiq68@hotmail.com";
    //$headers = "From: ".$mailFrom;
    //$txt = "You have received an e-mail from ".$name.".\n\n".$message;

    //mail($mailTo, $messageSubject, $txt, $headers);
   //header("Location: sodiq.html?datasaved");

}