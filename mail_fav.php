<?php
    require_once __DIR__.'/bootstrap.php';

    // starting session
    session_start();

    $subject = 'My Favourite List - Our Restaurant';
    $email = $_POST['email'];
    
    // email validation
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // error sending email, hence redirect
        echo $twig->render('emailerror.html');

    } else {
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
    
            // redirecting to favs page
            header("location: favs.php?email=success");   

            $arr_titles = array();
            $arr_price = array();
            $price_total = 0;
        } else {
    
            // error sending email, hence redirect
            echo $twig->render('emailerror.html');
        }
    }

