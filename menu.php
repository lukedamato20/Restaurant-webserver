<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // Create Database object
    $db = new Db();

    // Create Variable and store selected and named database entries
    $food = $db -> select("SELECT f.id, f.title AS Title, f.price AS Price, c.title AS categTitle FROM food f INNER JOIN category c ON  f.category = c.id");

    if (count($food) > 0){
        // Render view on specified page
        echo $twig->render('menu.html', ['getfood' => $food]);
    } else {
        echo $twig->render('404.html');
    }
