<?php session_start();
include 'control/datacontrol_dbconnect_pers.php';

//WICHITG: Die Weiterleitungen funktionieren nur, wenn keinerlei Zeichen (HTML-Code) an Browser geschickt wurden

//NEW ROW
if (isset($_REQUEST["newRow"])) {
    $_SESSION["whatToDo"] = "New";
    $_SESSION["toChange"] = "";
    header('Location: demo_dbconnect_pers_detail.php');//Weiterleitung
}
    
//EDIT ROW
if (isset($_REQUEST["editRow"])) {
    $_SESSION["whatToDo"] = "Edit";
    $_SESSION["toChange"] = $_REQUEST["editRow"];
    header('Location: demo_dbconnect_pers_detail.php');//Weiterleitung
}

//DELETE ROW
if (isset($_REQUEST["deleteRow"])) {
    $delID = $_REQUEST["deleteRow"];
    deleteRow($delID);
}

include 'view/include.header.html'; 
include 'view/include.pers-liste-oben.html'; 

//echo "<pre>".print_r($_REQUEST, TRUE)."</pre>";

//TABELLENDATEN NEU FRISCH SPEICHERN (brauchts nur in der Entwicklungs- und Testphase)
if (isset($_REQUEST["btn_setTestdata"])) {
    setTestdata();
}

//DATEN LADEN
$out = getPersTabelle();
echo $out;

include 'view/include.pers-liste-unten.html'; 
include 'view/include.footer.php'; 
?>