<!DOCTYPE html>
<html lang="es">
<style>
	table{
	border-collapse: collapse;
	background: white;
}
th, td{
	border: 1px solid black;
	padding: 8px;
	text-align: center;
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Registro de poductos</title>
</head>
<body>

	<h2> RESGISTRO DE TRES PRODUCTOS</h2>
	<h2>(en el numero 1 numeros del 51 al 99)</h2> <h2>(en el numero 2 solo numeros entre el -50 al -1)</h2>

	<form method="POST" action="">

	<?php

	for ($i=0; $i<3; $i++){
		echo " numero 1:";
		echo "<input type='number' name='num1[]'>"."";

		echo " numero 2:";
		echo "<input type='number' name='num2[]'>"."";
		echo "<br><br>";
	}
?>

	<button type="submit" name="operacione" value="operacione">
		operaciones</button>

	<?php

	if (isset($_POST['operacione'])) {

		$numero1=$_POST['num1'];
		$numero2=$_POST['num2'];

		$suma=array();
		$resta=array();
		$multiplicacion=array();
		$division=array();
		for ($i=0; $i<3; $i++){
			$suma[$i]=$numero1[$i]+$numero2[$i];

			$resta[$i]=$numero1[$i]-$numero2[$i];

			$multiplicacion[$i]=$numero1[$i]*$numero2[$i];

			$division[$i]=$numero1[$i]/$numero2[$i];
		}
	echo "<table>";
	echo "	<tr>
		<th>numero1</th>
		<th>numero2</th>
		<th>suma</th>
		<th>resta</th>
		<th>multiplicacion</th>
		<th>division</th>
		</tr>";
		for ($i=0; $i<3; $i++) {
			echo "<tr>";
			echo "<td>".$numero1[$i]."</td>";
			echo "<td>".$numero2[$i]."</td>";
			echo "<td>" .$suma[$i]."</td>";
			echo "<td>".$resta[$i]."</td>";
			echo "<td>".$multiplicacion[$i]."</td>";
			echo "<td>"."$".number_format($division[$i],2)."</td>";
			echo "</tr>";
		
	}
	echo "</table>";
}
?>
</body>
</html>