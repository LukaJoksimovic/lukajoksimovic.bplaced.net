<?php

    session_start();

    include("db_connect.php");

    $idOfUser = $_SESSION['id'];

    $ort = "statischstrasse 59";

    $sqlStatementTest = "INSERT INTO bestellung (datum, adresse, benutzer_fs) VALUES (DEFAULT, 'statischstrasse 59', $idOfUser)";
    mysqli_query($con, $sqlStatementTest);

    $sqlStatement1 = "SELECT id FROM bestellung WHERE benutzer_fs=$idOfUser";
    $result1 = mysqli_query($con, $sqlStatement1);
    $fetcher1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

    $idBestellung = $fetcher1['id'];

    $sqlStatement2 = "SELECT * FROM warenkorb_produkt INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser";
    $result2 = mysqli_query($con, $sqlStatement2);

    foreach ($result2 as $re) {

        $warenkordbID = $re['id'];
        $produktId = $re['produkt_fs'];
        $produktAnzahl = $re['anzahl'];
    
        $sqlStatement3 = "SELECT * FROM produkt INNER JOIN warenkorb_produkt ON produkt.id=warenkorb_produkt.produkt_fs INNER JOIN warenkorb ON warenkorb_produkt.warenkorb_fs=warenkorb.id WHERE warenkorb.benutzer_fs=$idOfUser AND warenkorb_produkt.produkt_fs=$produktId";
        $result3 = mysqli_query($con, $sqlStatement3);
    
        foreach ($result3 as $re) {
            $produktPreis = $re['preis'];
        
            $sqlStatement3 = "INSERT INTO bestellung_details (bestellung_fs, produkt_fs, preis, anzahl) VALUES ($idBestellung, $produktId, $produktPreis, $produktAnzahl)";
            mysqli_query($con, $sqlStatement3);
        
            $sqlStatement4 = "DELETE FROM warenkorb_produkt WHERE warenkorb_produkt.warenkorb_fs=$warenkordbID";
            mysqli_query($con, $sqlStatement4);
        }

    }

    header("Location: ..\bestellungErfolg.php");

?>