<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    // starting session
    session_start();

    // Create Database object 
    $db = new Db();

    $fav_food = $_SESSION["Fav_Food"];
    $fav_ids = $_SESSION["fav_ids"];
    $fav_query = null;

    // selecting the dishes from table where id is the same as the ones chosen by the user
    if (empty($fav_food)){
        print_r($fav_food);
        print(" is empty");

    } else {
        print_r($fav_food);

        print("list: ");
        print_r($fav_ids);

        $fav_query = $db -> select("SELECT f.id AS id, f.image AS itemImage, f.title AS Title, f.description AS itemDesc, f.price AS Price, f.ingredients AS itemIngr 
        FROM food f WHERE id IN ('$fav_ids')"); 
    }

    // Render view on specified page
    echo $twig->render('favs.html', ['getfood' => $fav_query]);