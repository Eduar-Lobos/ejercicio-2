<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title> ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="problema">
		
	
	<h1>Ejercicio practica 2</h1>
	<p>	2. Desarrolle un script que al poner un valor en metros imprima su valor
		equivalente en centímetros, milímetros, pulgadas y Kilometros . No olvide
		agregar el sufijo correspondiente a cada equivalencia.
	</p>
	</div>
<div class="solucion">
	<h3></h3>
	<?php
	$m=100;
	$cm=1;
	$mm=10;
	$pul=25;
	$km=100;

	$res1=$m*$cm;
	$res2=$cm*10;
	$res3=$mm*2+5;
	$res4=$pul/10;
	$res5=$km*10;

	printf(
		"1 Metro: %scm<br><br>
		 1 Centimetro: %s mm <br><br>
		 1 Pulgada: %s mm <br><br>
		 1 Pulgada: %s cm <br><br>
		 1 Kilometro: %s m <br><br>


		 ", 
		$res1, $res2,$res3, $res4, $res5);

	?>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>