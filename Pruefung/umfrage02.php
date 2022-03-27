<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Umfrage | 2</title> 
    <link rel="stylesheet" href="view/style.css">
  </head>
  <body>
    <span class="button" id="toggle-login">M133</span>
	<div id="formular">
	  <div id="triangle"></div>
	  <h1>
	  	<img class="umfragebild" src="view/umfrage.jpg" >
	  	Umfrage (2/3)
	  </h1>
	  <form action="controller/umfrage02zu03.php">
	  	Geburtsdatum:
	    <input type="text" name="geburtsdatum" placeholder="TT.MM.JJJJ" required="required"/>
	    Wohnort:
	    <input type="text" name="wohnort" placeholder="9999 Musterlingen" required="required"/>
	    Beruf:
	    <input type="text" name="beruf" placeholder="Informatiker EFZ" required="required"/>
	    <input type="submit" value="weiter >" />
	  </form>
	</div>
    <script src="index.js"></script>         
  </body>
</html>
