<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // List loaded from store
    $db = new Db();

    $food = $db -> select("SELECT f.id, f.image, f.title, f.description, c.categ FROM food");

    echo $twig->render('index.html', ['food' => $food]);


