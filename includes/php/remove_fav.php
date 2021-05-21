<?php
    // starting the session
    session_start();

    // Clear list
    // $fav_food = $_SESSION["Fav_Food"];
    // $fav_food = array();
    // $_SESSION["Fav_Food"] = $fav_food;

    if(!isset($fav_food, $foodID)){
        // Setting session varibale for food array
        $fav_food = $_SESSION["Fav_Food"];

        // putting selected id in session variable
        $food_ID = $_POST['foodID'];
    }

    // getting element of selected item
    $elem = array_search($food_ID, $fav_food);

    // setting selected element as null
    unset($fav_food[$elem]);

    // arranging the array's indexes
    $fav_food_reindexed = array_values($fav_food);

    $fav_ids =  implode("','",$fav_food_reindexed);

    $_SESSION["fav_ids"] = $fav_ids;
    $_SESSION["Fav_Food"]= $fav_food;
    
    // redirecting to details page
    header("location: ../../favs.php?removed=success");