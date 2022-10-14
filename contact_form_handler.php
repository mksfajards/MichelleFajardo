<?php
    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $subject_email = $_POST['subject'];
    $message = $_POST['message'];

    $mail_header = "From: $name ($sender_email)";

    $recipient = "mksfajards@gmail.com";

    mail($recipient, $subject_email, $message, $mail_header)
    or die("Err!");

    echo "message sent!";
?>