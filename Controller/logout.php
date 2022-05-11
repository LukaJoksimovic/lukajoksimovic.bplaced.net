<?php

    session_start();
    unset($_SESSION['id']) ;
    unset($_SESSION['surname']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);

    header("Location: ..\index.php");

?>
