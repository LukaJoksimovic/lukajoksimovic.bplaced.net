<?php
	session_start();
	
	// hier die Werte befüllen
	$benutzer = $_SESSION['benutzer']; 
	$gebdat = $_SESSION['geburtsdatum'];
	$ort = $_SESSION['wohnort'];
	$beruf = $_SESSION['beruf'];
	
	// falls Sie den $benutzer nicht befült haben
	// bekommt er hier einen  Initialwert
	if (strlen($benutzer) < 2) {
	    $benutzer = "initial";
	}
	$data = $benutzer."\n".$gebdat."\n".$ort."\n".$beruf;


	//hier die Daten speichern
	$directorypfad = "model/";
	$filename = $directorypfad."user_".$benutzer.".data";
	file_put_contents($filename, $data);
	

	
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Umfrage | 3</title> 
    <link rel="stylesheet" href="view/style.css">
  </head>

  <body>
    <span class="button" id="toggle-login">M133</span>
	<div id="formular">
	  <div id="triangle"></div>
	  <h1>
	  	<img class="umfragebild" src="view/umfrage.jpg" >
	  	Umfrage (3/3)
	  </h1>
	  <form action="controller/zurueck-zum-start.php">
		  <div>
		  	<h2>Zusammenfassung</h2>
		  	<br>
		  	<table>
		  		<tr valign="top">
		  			<td>Name (EMail):</td><td class="wert"><?= $benutzer ?></td>
		  		</tr>
		  		<tr valign="top">
		  			<td>Geburtsdatum:</td><td class="wert"><?= $gebdat ?></td>
		  		</tr>
		  		<tr valign="top">
		  			<td>Wohnort:</td><td class="wert"><?= $ort ?></td>
		  		</tr>
		  		<tr valign="top">
		  			<td>Beruf:</td><td class="wert"><?= $beruf ?></td>
		  		</tr>
		  	</table>
		  </div>
	    <input type="submit" value="< zurück zum Start" />
	  </form>
	</div>
    <script src="controller/js/index.js"></script>         
  </body>
</html>
