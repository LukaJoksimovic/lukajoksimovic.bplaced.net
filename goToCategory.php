<?php

    session_start();

    include 'Controller\productActions.php';

    $_SESSION['IDkategorie'] = $_REQUEST['kategorieID'];

    addToCartF();

?>