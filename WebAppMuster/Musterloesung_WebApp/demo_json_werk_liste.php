<?php session_start();
include 'control/datacontrol_json_werk.php';

//WICHITG: Die Weiterleitungen funktionieren nur, wenn keinerlei Zeichen (HTML-Code) an Browser geschickt wurden

//NEW ROW
if (isset($_REQUEST["newRow"])) {
    $_SESSION["whatToDo"] = "New";
    $_SESSION["toChange"] = "";
    header('Location: demo_json_werk_detail.php');
}
    
//EDIT ROW
if (isset($_REQUEST["editRow"])) {
    $_SESSION["whatToDo"] = "Edit";
    $_SESSION["toChange"] = $_REQUEST["editRow"];
    header('Location: demo_json_werk_detail.php');
}

//DELETE ROW
if (isset($_REQUEST["deleteRow"])) {
    $delID = $_REQUEST["deleteRow"];
    deleteRow($delID);
}

include 'view/include.header.html'; 
include 'view/include.werke-liste-oben.html'; 

//echo "<pre>".print_r($_REQUEST, TRUE)."</pre>";//Für Testzwecke

//TABELLENDATEN NEU FRISCH SPEICHERN (dies brauchts nur in der Entwicklungs- und Testphase)
if (isset($_REQUEST["btn_setTestdata"])) {
    setTestdata();
}

//DATEN LADEN
$out = getWerkeTabelle();
echo $out;

include 'view/include.werke-liste-unten.html'; 
include 'view/include.footer.php'; 
?>