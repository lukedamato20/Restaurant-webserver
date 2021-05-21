<?php
    session_start();

    $email = $_POST['email'];
    $message = $_POST['message'];
    $food_ID = $_POST['foodID'];

    # recipient, subject, message, header
    mail($email, 'My Favourite List - Our Restaurant', $message, 'From: lldamato14@gmail.com');

    // redirecting to details page
    header("location: ../../favs.php?sentemail=success");