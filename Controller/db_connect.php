<?php 

    $serverName= "localhost";

    $username= "root";

    $password = "";

    $db_name = "shop";

    $errors = array();

    $con = mysqli_connect($serverName, $username, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ".mysqli_connect_errno());
    }

?>
