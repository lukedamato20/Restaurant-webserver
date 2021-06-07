<?php
    // starting the session
    session_start();

    // Clear list
    $_SESSION["Fav_Food"] = array();

    // redirecting to details page
    header("location: ../../favs.php?removed=success");