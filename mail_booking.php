<?php
    $name = $_POST['name'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];

    $subject = 'My Reservation - Our Restaurant';

    $headers = "From: ". $email;
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $mailTo = "lldamato14@gmail.com";

    $message = "You have recieved an e-mail from " . $name;
    $message .= ("<br>");
    $message .= "Number of people in the group: " . $people;
    $message .= ("<br>");
    $message .= "Date of reservation: " . $date;
    $message .= ("<br>");
    $message .= "Time of reservation: " . $time;
    $message .= ("<br>");

    if(mail($mailTo, $subject, $message, $headers)){
        // $_SESSION['sent'] = "email sent";
        // redirecting to favs page
        header("location: booking.php?mailsent");  
    } else{
        //$_SESSION['sent'] = "error sending email";
        // redirecting to favs page
        header("location: booking.php?mailnotsent");  
    }


 

