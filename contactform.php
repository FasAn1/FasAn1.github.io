<?php
    $name = $_POST['name'];
    $customer_email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];

    $email_from = "fabian.1live@gmail.com";

    $email_subject = "Neue Anfrage (Hausmeisterservice Krause)";

    $email_body = "Name: $name.\n".
                    "Email-Adresse: $customer_email.\n".
                        "Nachricht: $message.\n";

    $to = "fabian.1live@gmail.com";

    $headers = "Von: $email_from \r\n";

    $headers .= "Antworten: $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html")

?>