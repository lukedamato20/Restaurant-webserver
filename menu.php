<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // Create Database object
    $db = new Db();

    // starting session
    session_start();

    if(isset($fav_food) and isset($fav_ids)){
        $fav_food = array();
        $_SESSION["Fav_Food"] = $fav_food;
        $fav_ids = array();
        $_SESSION["fav_ids"] = $fav_ids;
    } 
    
    // Create Variable and store selected and named database entries
    $food = $db -> select("SELECT f.id, f.title AS Title, f.price AS Price, c.title AS categTitle FROM food f INNER JOIN category c ON  f.category = c.id");

    // Render view on specified page
    echo $twig->render('menu.html', ['getfood' => $food]);