<?php session_start();
include 'control/datacontrol_dbconnect_pers.php';

//WICHITG: Die Weiterleitungen funktionieren nur,
//         wenn keinerlei Zeichen (HTML-Code)
//         an Browser geschickt wurden
include 'control/datacontrol_dbconnect_persdetails.php';
include 'view/include.header.html';

//Diese beiden Zeilen einschalten zum Testen (während der Entwicklung)
// echo "<pre>requests:".print_r($_REQUEST, TRUE)."</pre>";
// echo "<pre>sessions:".print_r($_SESSION, TRUE)."</pre>";

include 'view/include.pers-details.php';
?>