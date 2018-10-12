<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>VENUT</title>
 
 <style>
 body{padding-left: 2em; width: 50em;}
 

 </style>
 </head>
 <body>
 
 <h2>VENUT</h2>



 <table>
 <?php
 require 'yhteydenavaus.php';
 $yhteydenhallinta = new YhteydenHallinta();
 
 $lisäävenu = $yhteydenhallinta->suoritaHakuLause(
 "select CO, OSASTO from lisäävenu");

 foreach ($lisäävenu as $lisäävenu) {
 ?>
 <tr>
 <td><?php echo $lisäävenu['CO'] ?></td>
 <td> </td>
 <td> </td>
 <td> </td>
 <td><?php echo $lisäävenu['OSASTO'] ?></td>
 </tr>
 <?php
 }
 ?>
 </table>
 <p> </p>
 <input type="button" value="Aloitusvalikkoon" onclick="window.location.href='http://localhost/metso/'" />

 </body>
</html>


