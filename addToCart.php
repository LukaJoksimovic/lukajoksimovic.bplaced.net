<?php

    session_start();

    include 'Controller\productActions.php';

    $_SESSION['productID'] = $_REQUEST['idProdukt'];

    addToCartF();

?>