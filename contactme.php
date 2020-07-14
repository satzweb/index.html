<?php
    $name = $_POST['Name'];
    $visitmail = $_POST['visiterEmail'];
    $message = $_POST['Message'];
    $email_from = "SKP WEB PORTOLIO";
    $email_subject = "Someone viewed your profile";
    $email_body = "Sender Name: $name.\n";
                    "Sent from: $visitmail.\n";
                    "Message: $message.\n";

    $to = "satz2805@gmail.com";

    $headers = "From: Sathish Kumar \r\n";
    $headers .= "Reply-To: $visitmail \r\n";
    mail($to, $email_from, $email_subject, $email_body, $headers);

    header('Location: index.html');
    
?>
