<html>
<head>
	<title>convertisseur chiffre romain</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	$chiffre=$_GET['chiffre'];
	$min=$_GET['min'];
	$max=$_GET['max'];

		if($chiffre>$min && $chiffre<$max && $chiffre<9999){
			$num = romaniser($chiffre);
			echo "<h1 class='reponse'>".$chiffre." en chiffre romain :  ".$num." en chiffre romain</h1>";
		}elseif($chiffre>9999){
			echo "<p> chiffre trop grand, veuillez choisir un chiffre plus petit que 9999</p>";
		}else{
			echo "<p>Ce n'est pas un nombre entre ".$min.  " et ".$max."</p>";
		}


function romaniser($num){
	/* les chiffres romains :
		1->I
		5->V
		10->X
		50->L
		100->D
		1000->M
	*/
  $unite =array("","I","II","III","IV","V","VI","VII","VIII","IX");       //le tableau des unités
  $chiffreUnite=$unite[$num%10]." ";
 
  

  $decimal=array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC");       //le tableau des décimals
  $num-=($num%10);
  $num/=10;
  $chiffreDecimale=$decimal[$num%10]." ";
  

  $centaine=array("","C","CC","CCC","CD","D","DC","DCC","DCCC","CM");      //le tableau des centaines
  $num-=($num%10);
  $num/=10;
  $chiffreCentaine=$centaine[$num%10]." ";                                 
  

  $millier=array("","M","MM","MMM","IVM","VM","VIM","VIIM","VIIIM","IXM");  // le tableau des milliers
  $num-=($num%10);
  $num/=10;
  $chiffreMillier=$millier[$num%10]." ";

  $num=$chiffreMillier.$chiffreCentaine. $chiffreDecimale.$chiffreUnite;  //on ajoute tout
  return $num;
}
?>
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