<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>LISÄÄ VENU</title>
 <style>
 body{padding-left: 2em; width: 50em;}
 </style>
 </head>
 <body>
 <?php
 require 'yhteydenavaus.php';
 $yhteydenhallinta = new YhteydenHallinta();

 //haetaan tiedot lomakkeen kentistä
	 $CO = htmlspecialchars($_POST['CO']);
	 $OSASTO = htmlspecialchars($_POST['OSASTO']);
	 
	 //suoritetaan lisäyskysely
	 $lisattyLkm = $yhteydenhallinta->suoritaPaivitysLause(
	 "insert into lisäävenu "
	 . "(CO, OSASTO) "
	 . "values (?,?)",
	 Array($CO, $OSASTO));
 
 if ($lisattyLkm > 0) {
 print("<h2>LISÄYS ONNISTUI</h2>");
 } else {
	print("<h2>LISÄYS EI ONNISTUNUT</h2>");
 }
 ?>
 <input type="button" value="Aloitusvalikkoon" onclick="window.location.href='http://localhost/metso/'" />
 </body>
</html>