	<!DOCTYPE html>
	<html>
	 <head>
	 <meta charset="UTF-8">
	 <title>LISÄÄ VENU</title>
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
 <h2>LISÄÄ VENU</h2>
	 <form action="lisääVenu.php" method="post">
	 <p>
		 <label>
			 <span class="selite">CO:</span>
			 <input type="text" name="CO" size="15">
		 </label>
	 </p>
	 <p>
		 <label>
			 <span class="selite">OSASTO:</span>
			 <input type="text" name="OSASTO" size="15">
		 </label>
	 </p>

	 <p>
	 <input class="nappi" name="muunna" type="submit"
	 value ="Tallenna tiedot">
	 <br>
	 </p>
	 

	</form>
	<input type="button" value="Aloitusvalikkoon" onclick="window.location.href='http://localhost/metso/'" />
 </body>
</html>