
<?php
    $name = $POST['name'];
    $email = $POST['email'];
    $sub = $POST['sub'];
    $message = $POST['message'];

    $email_from = 'seavmeng262002@gmai.com';
    $email_subject = 'New form submission';
    $email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "Subject: $sub.\n".
                "User Message: $message.\n";

    $to = 'seavmgoffical@gmail.com';
    $headers = "From: $email_form \r\n";
    $headers .= "Reply-to: $email \r\n";

    echo ( $to.$email_subject.$email_body.$headers);
    header("location: contant.html");
?>
