<?php 

    $serverName= "localhost";

    $username= "root";

    $password = "Lukaistcool123";

    $db_name = "shop";

    $con = mysqli_connect($serverName, $username, $password, $db_name);

    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ".mysqli_connect_errno());
    }

?>
