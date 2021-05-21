<?Php
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

    // redirecting to details page
    header("location: ../../details.php?a=".$food_ID."?added=success");