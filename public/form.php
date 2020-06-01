<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $visitor_number = $_Post['number'];
    $message = $_Post['message'];


    $email_from = 'shirazsiddiqui44@gmail.com';
    $email_subject = 'New form Submission';
    $email_body = 'User Name: $name.\n'.
                    'User Email: $visitor_email.\n'.
                    'User Email: $visitor_number.\n'.
                        'User Message: $message.\n';

    $to = "shirazsiddiqui44@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject, $email_body, $headers);
    header("Location: index.html");

?>