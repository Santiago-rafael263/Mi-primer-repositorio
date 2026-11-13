<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de poductos</title>
</head>
<body>

	<h2> RESGISTRO DE TRES PRODUCTOS</h2>

	<form method="POST" action="">

	<?php

	for ($i=0; $i<3; $i++){
		echo " numero 2:";
		echo "<input type='text' name='productos[]'>"."";

		echo " numero 2:";
		echo "<input type='numer' name='precios[]'>"."";

		echo " suma:";
		echo "<input type='number' name='cantidades[]'>"."";
		echo "<br><br>";
	}
?>
	<button type="submit" name="guardar" value="guardar">
	guardar y calcular </button>

	<?php

	if (isset($_POST['guardar'])) {

		$productos=$_POST['productos'];
		$precios=$_POST['precios'];
		$cantidades=$_POST['cantidades'];

		$subtotales=array();
		$iva=array();
		$totales=array();


		for ($i=0; $i<3; $i++){

			$subtotales[$i]=$precios[$i]*$cantidades[$i];

			$iva[$i]=$subtotales[$i]*0.16;

			$totales[$i]=$subtotales[$i]+$iva[$i];
		}

		echo "<h3>ARREGLO DE PRODUCTOS</h3>";

		for ($i=0; $i<3; $i++) {
			echo $productos[$i]."<br>";
		}

		echo "<h3>ARREGLO DE PRECIOS</h3>";

		for ($i=0; $i<3; $i++) {
			echo "$".number_format($precios[$i],2)."<br>";
		}

		echo "<h3>ARREGLO DE CANTIDADES</h3>";

		for ($i=0; $i<3; $i++) {
			echo ($cantidades[$i])."<br>";
		}


		echo "<h3>ARREGLO DE SUBTOTALES</h3>";

		for ($i=0; $i<3; $i++) {
			echo "$".number_format($subtotales[$i],2)."<br>";
		}

		echo "<h3>ARREGLO DE IVA</h3>";

		for ($i=0; $i<3; $i++) {
			echo "$".number_format($iva[$i],2)."<br>";
		}
		echo "<h3>ARREGLO TOTALES</h3>";

		for ($i=0; $i<3; $i++) {
			echo "$".number_format($totales[$i],2)."<br>";
		}
	}
?>
</body>
</html>