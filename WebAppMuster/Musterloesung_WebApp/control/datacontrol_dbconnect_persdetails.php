<?php 
//Für die Initialisierung der GUI-Füllung
$detailVorname = "";
$detailNachname = "";
$detailEmail = "";


if (isset($_REQUEST["btn_cancel"])) {
    //Umleitung zurück
    //WICHITG: Die Weiterleitungen funktionieren nur,
    //         wenn keinerlei Zeichen (HTML-Code)
    //         an Browser geschickt wurden
    header('Location: demo_dbconnect_pers_liste.php?#jumpHere');
}

if (isset($_REQUEST["btn_save"])) {
    $pers = array();
    
    //Für die Speicherung
    $pers["p_vorname"]  = htmlspecialchars_decode($_REQUEST["detailVorname"]);
    $pers["p_nachname"] = htmlspecialchars_decode($_REQUEST["detailNachname"]);
    $pers["p_email"]    = htmlspecialchars_decode($_REQUEST["detailEmail"]);
    
    //Für die GUI-Füllung 
    // (falls es nicht geklappt hat, muss man nicht nochmal alles neu eintippen)
    $detailVorname  = $pers["p_vorname"];
    $detailNachname = $pers["p_nachname"];
    $detailEmail    = $pers["p_email"];
    
    $err = checkErrors($pers);
//     echo "<br><br><pre>pers".print_r($pers, true);
//     echo "<br>request".print_r($_REQUEST, true);
//     echo "<br>session".print_r($_SESSION, true);
    
    if (strlen($err)>0) {
        echo $err; //Ausgabe in GUI
    } else {
        if (isset($_SESSION["toChange"])) {
            if (trim($_SESSION["toChange"]) != "") {
                $updateID = $_SESSION["toChange"];//ID für Update
                //UPDATE $pers;
                $isOK = updateRow($updateID, $pers);
            } else {
                //INSERT $pers;
                $isOK = insertRow($pers);
            }
        }
        //Umleitung zurück
        header('Location: demo_dbconnect_pers_liste.php?#jumpHere');
    }  
}

//Daten laden
if (isset($_SESSION["whatToDo"])) {
    if ($_SESSION["whatToDo"] == "Edit") {
        if (isset($_SESSION["toChange"])) {
            $rowID = $_SESSION["toChange"];
            $pers = getRow($rowID);
            
            //Für die GUI-Füllung
            $detailVorname = $pers["p_vorname"];
            $detailNachname = $pers["p_nachname"];
            $detailEmail = $pers["p_email"];           
        }
    }
}

function checkErrors($pers) {
    $err = "";
    if (strlen($pers["p_vorname"]) < 2) {  $err .= "<li class='fehlermeldung'>VORNAME ist leer.</li>"; }
    if (strlen($pers["p_nachname"]) < 2) {  $err .= "<li class='fehlermeldung'>NACHNAME ist leer.</li>"; }
    if (strlen($pers["p_email"]) < 2) {  $err .= "<li class='fehlermeldung'>EMAIL ist leer.</li>"; }
    if (strlen($err) > 1) {
        $err = "<ul>".$err."</ul>";
    }
    return $err;
}

?>