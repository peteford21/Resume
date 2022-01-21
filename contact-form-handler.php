<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message= $_POST['message'];

    $email_from = 'Peteford21@hotmail.com';
    $email_subject = "New form submission";
    $email_body = "User name: $name.\n".
                        "User email: $visitor_email.\n".
                            "User message: $message.\n";

    $to = "peteford@umich.edu";

    $headers = "From $email_from\r\n";

    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    //mail($to);

    header("Location: index.html");

?>