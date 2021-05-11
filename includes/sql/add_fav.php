<?php
    require_once dirname(__DIR__, 2).'/bootstrap.php';
    require_once dirname(__DIR__, 2).'/database.php';
    
    // Create Database object \
    $db = new Db();

    // Getting the selected food id
    $selectedID = $_POST['foodID'];

    // Executing the update sql query to change fav value 0 to 1
    $updateFav = $db -> query("UPDATE food SET favourite='1' WHERE id='$selectedID'");

    // redirecting to details page
    header("location: ../../details.php?a=".$selectedID."?added=success");