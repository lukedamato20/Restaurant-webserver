<?php
    session_start();

    $email = $_POST['email'];
    $subject = 'My Favourite List - Our Restaurant';
    $message = $_POST['message'];
    $list = $_SESSION['list'];
    $food_ID = $_POST['foodID'];

    $message .= "<br>";
    $message .= file_get_contents("favs.html");


    # recipient, subject, message, header
    if(mail($email, $subject, $message, 'From: lldamato14@gmail.com')){
        $_SESSION['sent'] = "email sent";
    }
    else{
        $_SESSION['sent'] = "error sending email";
    }
        

    // redirecting to details page
    header("location: ../../favs.php?sentemail=success");