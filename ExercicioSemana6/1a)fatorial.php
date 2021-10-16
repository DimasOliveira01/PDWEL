<html>
 <head>
  <title>Fatorial</title>
 </head>
 <body>
 
	<h1>Cálculo Fatorial:</h1>
 
	<form action="1a)fatorial.php" method="get">
		Digite um número para obter o fatorial: <input type="number" name="formulario" ><br>
		<input type="submit">
	</form>
 <?php
	fatorial($_GET["formulario"]);
 ?>


<?php
	function fatorial($entrada){
	
		$numero=$entrada;
		$total=1;
		while ($numero>=1){
			$total = $total*$numero;
			$numero--;
		}
	
		echo '<b>O Fatorial de ' , ($entrada) , ' é ' , ($total) , '.<b>';
	}
?>