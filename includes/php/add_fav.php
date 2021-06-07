<?php
    // starting the session
    session_start();

    if(!isset($fav_food, $foodID)){
        // Setting session varibale for food array
        $fav_food = $_SESSION["Fav_Food"];

        // putting selected id in session variable
        $food_ID = $_POST['foodID'];
    }
    if(!in_array($food_ID, $fav_food)){
        // filling the fav food array with the food ID chosen by the user
        array_push($fav_food, $food_ID);

        // Setting session varibale for food array
        $_SESSION["Fav_Food"] = $fav_food;

        $fav_ids =  implode("','", $fav_food);
        $_SESSION["fav_ids"] = $fav_ids;
    }

    // setting up email variabls required
    if(!isset($fav_food, $foodID)){
        // putting selected id in session variable
        $fav_title = $_POST['foodTitle'];
        $_SESSION["foodTitle"] = $fav_title;

        // putting selected id in session variable
        $fav_price = $_POST['foodPrice'];
        $_SESSION["foodPrice"] = $fav_price;
    }
    // adding data to arrays in       array(item, array)
    if(!in_array($fav_title, $_SESSION["email_titles"])){
        // filling the fav food array with the food ID chosen by the user
        array_push($_SESSION["email_titles"], $fav_title);
    }
    if(!in_array($fav_price, $_SESSION["email_prices"])){
        // filling the fav food array with the food ID chosen by the user
        array_push($_SESSION["email_prices"], $fav_price);
    }

    // redirecting to details page
    header("location: ../../details.php?a=".$food_ID."?added=success");