<?php

    // starting session
    session_start();
    
    $email = $_POST['email'];
    $subject = 'My Favourite List - Our Restaurant';

    $headers = "From: lldamato14@gmail.com \r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    // setting arrays in session variables
    $arr_titles = $_SESSION["email_titles"];
    $arr_price = $_SESSION["email_prices"];

    // total price for all favs
    $price_total = $_SESSION["email_prices_total"];
    $price_total = array_sum($arr_price);

    $message = ("<h3>This is my favourites list: </h3>");


    $cnt = 0;
    while ($cnt < count($arr_titles) && $cnt < count($arr_price)){
    
        $message .= ("<br>");
        $message .= ("- ".$arr_titles[$cnt]." which costs €".$arr_price[$cnt]);
        $cnt ++;
    }

    $message .= ("<br>");
    $message .= ("<br>");
    $message .= ("Total Price: €".$price_total);

    # recipient, subject, message, header
    if(mail($email, $subject, $message, $headers)){
        // $_SESSION['sent'] = "email sent";

        // redirecting to favs page
        header("location: favs.php?email=success");   
    }
    else{
        //$_SESSION['sent'] = "error sending email";
        // redirecting to favs page
        header("location: favs.php?email=success");   
    }
