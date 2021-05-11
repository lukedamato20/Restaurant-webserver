<?php
    require_once dirname(__DIR__, 2).'/bootstrap.php';
    require_once dirname(__DIR__, 2).'/database.php';
    
    // Create Database object \
    $db = new Db();

    // Getting the selected food id
    $removedID = $_POST['foodID'];

    // Executing the update sql query to change fav value 1 to 0
    $updateFav = $db -> query("UPDATE food SET favourite='0' WHERE id='$removedID'");

    // redirecting to details page
    header("location: ../../favs.php?removed=success");