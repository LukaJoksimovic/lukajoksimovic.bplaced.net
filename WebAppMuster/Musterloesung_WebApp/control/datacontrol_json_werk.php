<?php
function getFilename($auswahl) {
    $ret = "";
    switch (strtolower($auswahl)) {
        case "werkeliste":
            $ret = "data/werkeliste.json";
            break;        
        default:
            $ret = "";
            break;
    }
    return $ret;
}

function getId() {
    $date = date_create();
    return date_timestamp_get($date);
}

function getRow($rowID) {
    $returnArray = array();
    $werkeListe = getWerkeListe();
    if (array_key_exists($rowID , $werkeListe)) {
        $returnArray = $werkeListe[$rowID];
    }
    return $returnArray;
}

function deleteRow($delID) {
    $fileNameWerke = getFilename("werkeliste");
    $werkeListe = getWerkeListe($fileNameWerke);
    unset($werkeListe[$delID]);
    saveList($werkeListe, $fileNameWerke);
}

function getWerkeListe() {
    $werkeListe = array();
    $fileNameWerke = getFilename("werkeliste");
    if (file_exists($fileNameWerke)) {
        $json_data = file_get_contents($fileNameWerke);
        $werkeListe = json_decode($json_data, true);
        return $werkeListe;
    } else {
        echo "Error: Die Werkeliste-Datei fehlt!";
    }
}

function getWerkeTabelle() {
    $werkeListe = getWerkeListe();
    $out="<table class='table table-striped fa-lg' id='mainTable'>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Typ</th>
                    <th>Titel</th>
                    <th>Machart</th>
                    <th>Jahr</th>
                    <th>Dim.(cm)</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                <tr>
            </thead>
             <tbody>
        		<div id='jumpHere'>
        		  <form action='#jumpHere' method='post' >";
    if (count($werkeListe) < 1) {
        $out .=     "<tr>
                        <td colspan='8'>Keine Daten vorhanden.<tr>
                    </tr>";
    } else {
        foreach ($werkeListe as $key => $value) {
            $out .= "<tr>
                        <td><img src='".$value["wFoto"]."' height='30'  width='30' /></td>
                        <td>".$value["wTyp"]."</td>
                        <td>".$value["wTitel"]."</td>
                        <td>".$value["wMade"]."</td>
                        <td>".$value["wYear"]."</td>
                        <td>".$value["wDim"]."</td>
                        <td><button name='deleteRow' value='".$key."' class='button fa fa-trash'/></td>
                        <td><button name='editRow'   value='".$key."' class='button fa fa-edit' /></td>
                    </tr>";
        }
    }
    $out .=         "<tr>
                        <td colspan='7'></td>
                        <td><button name='newRow' value='newRow' class='button special fa fa-plus' /></td>
                    </tr>
                  </form>
                </div>
			</tbody>
          </table>";
    
    return $out;
}

function setTestdata() {
    $myId = getId();
    $werkeliste = array();
    $werkeliste[$myId++] = array("wTyp" => "Bild"        , "wTitel" => "Im Winter", "wMade" => "Aquarell"        , "wYear" => "2017", "wDim" => "50x70"   , "wFoto" => "");
    $werkeliste[$myId++] = array("wTyp" => "Photographie", "wTitel" => "Zu Hause" , "wMade" => "GlanzPapier"     , "wYear" => "2015", "wDim" => "30x40"   , "wFoto" => "");
    $werkeliste[$myId++] = array("wTyp" => "Skulptur"    , "wTitel" => "Wir zwei" , "wMade" => "Holzschnitt"     , "wYear" => "2016", "wDim" => "20x30x90", "wFoto" => "");
    $werkeliste[$myId++] = array("wTyp" => "Bild"        , "wTitel" => "Strand"   , "wMade" => "Oel auf Leine"   , "wYear" => "2017", "wDim" => "50x70"   , "wFoto" => "");
    $werkeliste[$myId++] = array("wTyp" => "Ikone"       , "wTitel" => "Maria"    , "wMade" => "Malerei auf Holz", "wYear" => "2017", "wDim" => "30x30"   , "wFoto" => "");

    saveList($werkeliste);
}

function saveList($DataList) {
    $isOK = false;
    $fileNameWerke = getFilename("werkeliste");
    $json_data = json_encode($DataList, JSON_PRETTY_PRINT);
    $isOK = file_put_contents($fileNameWerke, $json_data);
    return $isOK;
}

?>