<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Umfrage | 1</title> 
    <link rel="stylesheet" href="view/style.css">
  </head>
  <body>
    <span class="button" id="toggle-login">M133</span>
	<div id="formular">
	  <div id="triangle"></div>
	  <h1>
	  	<img class="umfragebild" src="view/umfrage.jpg" >
	  	Umfrage (1/3)
	  </h1>
	  <form action="controller/umfrage01zu02.php">
	  	E-Mail:
	    <input type="email" name="benutzer" placeholder="E-Mail" required="required"/>
	    Passwort:
	    <input type="password" name="password" placeholder="Password" required="required"/>
	    <input type="submit" value="weiter >" />
	  </form>
	</div>
    <script src="controller/js/index.js"></script>         
  </body>
</html>
