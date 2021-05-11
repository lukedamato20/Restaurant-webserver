<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    // Create Database object
    $db = new Db();

    //Getting product chosen info
    $itemId = $_SERVER['REQUEST_URI'];
    // ^value: /restaurant/details.php?a=1

    // select the item id from uri
    $currentID = substr($itemId, strpos($itemId, "=") + 1);

    // Create Variable and store selected and named database entries
    $food = $db -> select("SELECT f.id AS ID, f.image AS itemImage, f.title AS Title, f.description AS itemDesc, f.price AS Price, f.ingredients AS itemIngr 
    FROM food f WHERE id='$currentID'");

    // Render view on specified page
    echo $twig->render('details.html', ['getfood' => $food] );