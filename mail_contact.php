<?php
    require_once __DIR__.'/bootstrap.php';

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    // email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // error sending email, hence redirect
        echo $twig->render('emailerror.html');

    } else {
    
        $headers = "From: ". $email;
        $headers .= "Reply-To: ". $email . "\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
        $mailTo = "lldamato14@gmail.com";
    
        $txt = $message . "\r\n";
    
        if(mail($mailTo, $subject, $txt, $headers)){
            // $_SESSION['sent'] = "email sent";
            // redirecting to favs page
            header("location: contact.php?mailsent");  
        } else{
            //$_SESSION['sent'] = "error sending email";
            // redirecting to favs page
            echo $twig->render('emailerror.html');

        }
    }




 

