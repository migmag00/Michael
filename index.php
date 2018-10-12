
<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>VENUAPP</title>
 <style>
 button{font-size : 1em; width : 13em;
 margin-bottom: 0.3em; margin-top: 0.3em;}
 body{padding-left: 2em; width: 13em;}
 h2{text-align:center; }
 </style>
 <script>
 function naytaValinta(valittuSivu) {
 document.menu.action = valittuSivu;
 document.menu.submit();
 }
</script>
</head>
<body>
<h2>PÄÄVALIKKO</h2>
<form name="menu" method="post">
	
	<button onclick="naytaValinta('osastonSyotto.php')">
	HAE VENUN OSASTO
	</button>
	
	<button onclick="naytaValinta('venunsyotto.php')">
	LISÄÄ VENU
	</button>
	
	<button onclick="naytaValinta('venut.php')">
	VENUT
	</button>
	
	
	
</form>
</body>
</html>