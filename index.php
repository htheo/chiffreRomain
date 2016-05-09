<html lang="fr">
<head>
	<title>Chiffre Romain Simulator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1 class="reponse">Choisir un chiffre entre</h1>
	
<form action="convertisseur.php" method="get">
		
		<h2>Choisir un chiffre entre</h2>
		<p class="inline">le minimum : </p>
		<input id="min" class="inline" type="number" name="min" value="1"><br>
		<p class="inline"> et le maximum : </p>
		<input id="max" class="inline" type="number" name="max" value="10"><br>

		<p>Reconvertir</p>
		<input class="inline" type="text" name="chiffre" placeholder="votre nombre"><br><br>
		<p id="problem">Le minimum est plus grand que le maximum, veuillez changer la valeur</p>
		<input id="valid" type="submit" value="transformer">
	</form>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>