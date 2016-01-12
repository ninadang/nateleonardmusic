<?php

if($_POST["submit"]) {
    $recipient="ninadangt@gmail.com";
    $subject="Message from nateleonardmusic.com";
    $senderFname=$_POST["senderFname"];
    $senderLname=$_POST["senderLname"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $senderFname $senderLname\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thanks! Your message has been sent.</p>";
}

?>