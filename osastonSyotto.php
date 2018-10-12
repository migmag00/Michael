	<!DOCTYPE html>
	<html>
	 <head>
	 <meta charset="UTF-8">
	 <title>HAE VENUN OSASTO</title>
	 <style>
	 body{
	 width:40em;
	 }
	 .selite{
	 display: block;
	 width: 10em;
	 float:left;
	 }
	 .nappi {
	 float:left; 
}
	 
body{padding-left: 2em; width: 50em;}

	 </style>
	 </head>
  
  
 <body>
 <h2>HAE VENUN OSASTO</h2>
	 <form action="lisääOsasto.php" method="post">
	 <p>
		 <label>
			 <span class="selite">SYÖTÄ CO:</span>
			 <input type="text" name="CO" size="15">
		 </label>
	 </p>
	
	 <p>
	 <input class="nappi" name="muunna" type="submit"
	 value ="Hae">
	 <br>
	 </p>
	 

	</form>
	<input type="button" value="Aloitusvalikkoon" onclick="window.location.href='http://localhost/metso/'" />
 </body>
</html>