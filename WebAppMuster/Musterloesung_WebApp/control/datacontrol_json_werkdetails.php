<?php
//Für die Initialisierung der GUI-Füllung
$detailType = "";
$detailTitl = "";
$detailMArt = "";
$detailJahr = "";
$detailDime = "";
$detailFoto = "";

if (isset($_REQUEST["btn_cancel"])) {
    //Umleitung zurück
    //WICHITG: Die Weiterleitungen funktionieren nur,
    //         wenn keinerlei Zeichen (HTML-Code)
    //         an Browser geschickt wurden
    header('Location: demo_json_werk_liste.php?#jumpHere');
}

$fileNameWerke = getFilename("werkeliste");
if (isset($_REQUEST["btn_save"])) {
    $werkArr = array();

    //Für die Speicherung
    $werkArr["wTyp"]   = htmlspecialchars_decode($_REQUEST["detailType"]);
    $werkArr["wTitel"] = htmlspecialchars_decode($_REQUEST["detailTitl"]);
    $werkArr["wMade"]  = htmlspecialchars_decode($_REQUEST["detailMArt"]);
    $werkArr["wYear"]  = htmlspecialchars_decode($_REQUEST["detailJahr"]);
    $werkArr["wDim"]   = htmlspecialchars_decode($_REQUEST["detailDime"]);
    $werkArr["wFoto"]  = htmlspecialchars_decode($_REQUEST["detailFoto"]);
    
    //Für die GUI-Füllung
    $detailType = $werkArr["wTyp"];
    $detailTitl = $werkArr["wTitel"];
    $detailMArt = $werkArr["wMade"];
    $detailJahr = $werkArr["wYear"];
    $detailDime = $werkArr["wDim"];
    $detailFoto = $werkArr["wFoto"];
    
    $err = checkErrors($werkArr);
    if (strlen($err)>0) {
        echo $err; //Ausgabe in GUI
    } else {
        $rowID = getId();
        if (isset($_SESSION["toChange"])) {
            if (trim($_SESSION["toChange"]) != "") {
                $rowID = $_SESSION["toChange"];//ID für Update
            }
        }
        $werkeListe = getWerkeListe();
        $werkeListe[$rowID] = $werkArr;
        saveList($werkeListe);
        //Umleitung zurück
        //WICHITG: Die Weiterleitungen funktionieren nur,
        //         wenn keinerlei Zeichen (HTML-Code)
        //         an Browser geschickt wurden
        header('Location: demo_json_werk_liste.php?#jumpHere');
    }
    
}

//Daten laden
if (isset($_SESSION["whatToDo"])) {
    if ($_SESSION["whatToDo"] == "Edit") {
        if (isset($_SESSION["toChange"])) {
            $rowID = $_SESSION["toChange"];
            $werkArr = getRow($rowID);
            
            //Variabeln für die GUI-Füllung
            $detailTitl = $werkArr["wTitel"];
            $detailType = $werkArr["wTyp"];
            $detailMArt = $werkArr["wMade"];
            $detailJahr = $werkArr["wYear"];
            $detailDime = $werkArr["wDim"];
            $detailFoto = $werkArr["wFoto"];            
        }
    }
}

function checkErrors($werkArr) {
    $err = "";
    if (strlen($werkArr["wTitel"]) < 2) {  $err .= "<li class='fehlermeldung'>TITEL ist leer.</li>"; }
    if (strlen($werkArr["wTyp"]) < 2) {  $err .= "<li class='fehlermeldung'>TYP ist leer.</li>"; }
    if (strlen($werkArr["wMade"]) < 2) {  $err .= "<li class='fehlermeldung'>MACHART ist leer.</li>"; }
    if (strlen($werkArr["wYear"]) < 2) {  $err .= "<li class='fehlermeldung'>JAHR ist leer.</li>"; }
    if (strlen($werkArr["wDim"]) < 2) {  $err .= "<li class='fehlermeldung'>DIMENSION ist leer.</li>"; }
    //$werkArr["wFoto"];
    if (strlen($err) > 1) {
        $err = "<ul>".$err."</ul>";
    }
    return $err;
}


?>