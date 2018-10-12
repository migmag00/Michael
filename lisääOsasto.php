<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>VENUT</title>
 <style>
  p{
	 font-size:40px;
  }
  
  body{padding-left: 2em; width: 50em;}
 

 </style>

 
 </head>
 <body>
 
 <h2>OSASTO:</h2>


 <table>
 <?php
 require 'yhteydenavaus.php';
 $yhteydenhallinta = new YhteydenHallinta();
 
 
  $CO = htmlspecialchars($_POST['CO']);
 $lisäävenu = $yhteydenhallinta->suoritaHakuLause(
 "select OSASTO from lisäävenu WHERE CO='$CO'");

 foreach ($lisäävenu as $lisäävenu) {
 ?>
 
 <p><?php echo $lisäävenu['OSASTO'] ?></p>
 
 
 <?php
 }
 ?>
 </table>
 <input type="button" value="Aloitusvalikkoon" onclick="window.location.href='http://localhost/metso/'" />
 </body>
</html>