<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    // Create Database object
    $db = new Db();

    // starting session
    session_start();

    $search = $_POST['search'];

    $search_query = $db -> select("SELECT f.id AS id, f.title AS Title, f.description, f.meta_tag, f.ingredients, f.price AS Price FROM food f 
    WHERE f.title LIKE '%$search%' OR f.description LIKE '%$search%' OR f.ingredients LIKE '%$search%' OR f.meta_tag LIKE '%$search%'"); 

    echo $twig->render('search.html', ['getsearch' => $search_query]);