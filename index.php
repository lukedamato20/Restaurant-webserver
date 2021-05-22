<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // List loaded from store
    $db = new Db();

    if(!isset($fav_food) and isset($fav_ids)){
        $fav_food = array();
        $_SESSION["Fav_Food"] = $fav_food;
        $fav_ids = array();
        $_SESSION["fav_ids"] = $fav_ids;
    } 

    $food = $db -> select("SELECT f.id, f.image, f.title, f.description, c.categ FROM food");

    echo $twig->render('index.html', ['food' => $food]);


