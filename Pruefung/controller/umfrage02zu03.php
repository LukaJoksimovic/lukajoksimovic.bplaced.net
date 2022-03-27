<?php 
  session_start();

  $_SESSION['geburtsdatum'] = $_REQUEST['geburtsdatum'];
	$_SESSION['wohnort'] = $_REQUEST['wohnort'];
	$_SESSION['beruf'] = $_REQUEST['beruf'];

  // Hier die Formulardaten in die Session speichern

  // Weiterleitung
  header("location: ../umfrage03.php");
?>




