<?php
    // starting the session
    session_start();

    // Clear list
    $fav_food = $_SESSION["Fav_Food"];
    $fav_food = array();
    $_SESSION["Fav_Food"] = $fav_food;

    // redirecting to details page
    header("location: ../../favs.php?removed=success");