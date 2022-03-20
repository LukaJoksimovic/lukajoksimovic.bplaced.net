<?php session_start();
include 'control/datacontrol_json_werk.php';

//WICHITG: Die Weiterleitungen funktionieren nur,
//         wenn keinerlei Zeichen (HTML-Code)
//         an Browser geschickt wurden
include 'control/datacontrol_json_werkdetails.php';
include 'view/include.header.html';

//Test-Codes: Das hier einschalten um zu sehen, 
//was von der einen Seite zur nächsten (dieser) übergeben wird.
// echo "<pre>requests:".print_r($_REQUEST, TRUE)."</pre>";
// echo "<pre>sessions:".print_r($_SESSION, TRUE)."</pre>";

include 'view/include.werke-details.php';
?>