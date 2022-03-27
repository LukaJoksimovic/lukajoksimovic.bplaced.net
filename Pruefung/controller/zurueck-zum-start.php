<?php
    session_start();
    session_destroy();
    header("location: ../umfrage01.php");
?>