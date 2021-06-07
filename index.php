<?php
    require_once __DIR__.'/bootstrap.php';

    // starting session
    session_start();


    if(!isset($_SESSION["Fav_Food"])){
        $_SESSION["Fav_Food"] = array();
    } 

    if(!isset($_SESSION["fav_ids"])){
        $_SESSION["fav_ids"] = array();
    }

    if(!isset($_SESSION["email_titles"])){
        $_SESSION["email_titles"] = array();
    }

    if(!isset($_SESSION["email_prices"])){
        $_SESSION["email_prices"] = array();
    }

    if(!isset($_SESSION["email_prices_total"])){
        $_SESSION["email_prices_total"] = 0;
    }

    if(!isset($_SESSION['sent'])){
        $_SESSION['sent'] = "not sent";
    }

    echo $twig->render('index.html');