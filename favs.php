<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    // starting session
    session_start();

    // Create Database object 
    $db = new Db();

    // setting sql query as null for error purposes
    $fav_query = null;

    //getting session variables and storing them
    $fav_food = $_SESSION["Fav_Food"];
    $fav_ids = $_SESSION["fav_ids"];
    $sent = $_SESSION['sent'];
    $arr_titles = $_SESSION["email_titles"];
    $arr_price = $_SESSION["email_prices"];

    // selecting the dishes from table where id is the same as the ones chosen by the user
    if (empty($fav_food)){
        // Debugging purposes
        // print_r($fav_food);
        // print(" is empty");

        // echo "<br>";

        // print("email status: ");
        // print($_SESSION['sent']);

        echo $twig->render('emptyfavs.html');

    } else {
        // Debugging purposes
        // print("food ");
        // print_r($fav_food);

        // echo "<br>";
        // print("email status: ");
        // print($sent);

        // echo "<br>";
        // print("title: ");
        // print_r($arr_titles);

        // echo "<br>";
        // print("price: ");
        // print_r($arr_price);

        $fav_query = $db -> select("SELECT f.id AS id, f.image AS itemImage, f.title AS Title, f.description AS itemDesc, f.price AS Price, f.ingredients AS itemIngr 
        FROM food f WHERE id IN ('$fav_ids')"); 

        echo $twig->render('favs.html', ['favfood' => $fav_query]);

    }

    
