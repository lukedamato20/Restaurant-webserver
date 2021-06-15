<?php

    // starting session
    session_start();

    $email = $_POST['email'];
    $subject = 'My Reservation - Our Restaurant';

    $headers = "From: ". $email;
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $name = $_POST['name'];
    $message = $_POST['message'];

    $mailTo = "lldamato14@gmail.com";

    $txt = "You have recieved an e-mail from " . $name;
    $txt .= ("<br>");
    $txt .= "Special Requests: " . $message;
    $txt .= ("<br>");
    $txt .= "Time of reservation: ";
    $txt .= ("<br>");
    $txt .= "Number of people: ";

    if(mail($mailTo, $subject, $txt, $headers)){
        // $_SESSION['sent'] = "email sent";
        // redirecting to favs page
        header("location: booking.php?mailsent");  
    } else{
        //$_SESSION['sent'] = "error sending email";
        // redirecting to favs page
        header("location: booking.php?mailnotsent");  
    }


 

