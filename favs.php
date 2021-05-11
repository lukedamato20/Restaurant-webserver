<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // Create Database object
    $db = new Db();

    // Create Variable and store selected and named database entries
    $food = $db -> select("SELECT f.id AS id, f.image AS itemImage, f.title AS Title, f.description AS itemDesc, f.price AS Price, f.ingredients AS itemIngr 
    FROM food f WHERE f.favourite=1");

    // Render view on specified page
    echo $twig->render('favs.html', ['getfood' => $food]);
