<?php

    session_start();

    include("Controller\db_connect.php");

    $idOfUser = $_SESSION['id'];

    $sqlStatement = "SELECT id FROM warenkorb WHERE warenkorb.benutzer_fs=$idOfUser";
    $result = mysqli_query($con, $sqlStatement);
    $fetcher= mysqli_fetch_array($result, MYSQLI_ASSOC);

    $idWarenkorb = $fetcher['id'];

    $sqlStatement4 = "DELETE FROM warenkorb_produkt WHERE warenkorb_produkt.warenkorb_fs=$idWarenkorb";
    mysqli_query($con, $sqlStatement4);

    /*
    $idOfUser = $_SESSION['id'];

    $ort = 'statischstrasse 59';

    $sqlStatement = "INSERT INTO bestellung (datum, adresse, benutzer_fs) VALUES (DEFAULT, $ort, $idOfUser);";
    mysqli_query($con, $sqlStatement);

    $sqlStatement1 = "SELECT id FROM bestellung WHERE benutzer_fs=$idOfUser";
    $result1 = mysqli_query($con, $sqlStatement1);
    $fetcher1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

    $idBestellung = $fetcher1['id'];

    $sqlStatement2 = "SELECT * FROM warenkorb_produkt INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser";
    $result2 = mysqli_query($con, $sqlStatement2);
    $fetcher2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

    foreach ($result2 as $re) {

        $warenkordbID = $re['id'];
        $produktId = $re['produkt_fs'];
        $produktAnzahl = $re['anzahl'];
    
        $sqlStatement3 = "SELECT produkt.preis FROM produkt INNER JOIN warenkorb_produkt ON produkt.id=warenkorb_produkt.produkt_fs INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser AND warenkorb_produkt.produkt_fs=$produktId";
        $result3 = mysqli_query($con, $sqlStatement3);
        $fetcher3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    
        $produktPreis = $fetcher3['preis'];
    
        $sqlStatement3 = "INSERT INTO bestellung_details (bestellung_fs, produkt_fs, preis, anzahl) VALUES ($idBestellung, $produktId, $produktPreis, $produktAnzahl)";
        mysqli_query($con, $sqlStatement3);
    
        $sqlStatement4 = "DELETE FROM warenkorb_produkt WHERE warenkorb_produkt=$warenkordbID";
        mysqli_query($con, $sqlStatement4);

    }

    header("Location: ..\contact.php");

    */

    header('Location: bestellungErfolg.php');

?>

