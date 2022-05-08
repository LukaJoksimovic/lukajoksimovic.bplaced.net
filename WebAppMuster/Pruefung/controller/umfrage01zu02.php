<?php 
  session_start();
  
	$_SESSION['benutzer'] = $_REQUEST['benutzer'];
	$_SESSION['password'] = $_REQUEST['password'];
    // Hier die Formulardaten in die Session speichern

	// Pruefe Inhalt von Eingabe  
    if ((strlen($_SESSION['benutzer'])>0) and (strlen($_SESSION['password'])>0)) {
        // Weieterleitung
        header("location: ../umfrage02.php");
    } else {
    	$html_Output = '<html><head>';
    	$html_Output = '<title>Anmeldung</title>';
    	$html_Output = '<link rel="stylesheet" href="../view/css/style.css">';
    	$html_Output .= '</head><body>';
    	$html_Output .= '<h1>Uups</h1>';
    	$html_Output .= 'Das war nicht erfolgreich';
    	$html_Output .= '<br><a href=""> < zurück </a>';
    	$html_Output .= '</body></html>';
    	echo $html_Output;
    }
?>




