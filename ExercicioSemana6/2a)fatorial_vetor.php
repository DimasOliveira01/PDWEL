<html>
 <head>
  <title>Fatorial</title>
 </head>
 <body>
 
	<h1>Cálculo Fatorial:</h1>
 
	<form action="2a)fatorial_vetor.php" method="get">
		Digite um número para obter o fatorial: <input type="number" name="formulario" ><br>
		<input type="submit">
	</form>
 <?php
	fatorialVetor($_GET["formulario"]);
 ?>

<?php
	function fatorialVetor($entrada){
		$numero=$entrada;
		$contador=0;
		$vetor_fatorial = array();
		echo '<h2>O Fatorial de todos os números abaixo de ' , ($entrada) , ' são:</h2>';
		do {
			$vetor_fatorial[] = fatorial($numero);
			echo 'O fatorial de ',($numero),' é ', $vetor_fatorial[$contador];
			echo '<br>';
			$numero--;
			$contador++;
		}while ($numero>=1);
	
	}
?>

<?php
	function fatorial($entrada){
	
		$numero=$entrada;
		$total=1;
		while ($numero>=1){
			$total = $total*$numero;
			$numero--;
		}
		return $total;
	}
?>