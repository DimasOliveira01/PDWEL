<html>
 <head>
  <title>Primo</title>
 </head>
 <body>
 
	<h1>Verifique se um número é primo:</h1>
 
	<form action="1b)primo.php" method="get">
		Digite o número para verificar se ele é primo: <input type="number" name="formulario"><br>
		<input type="submit">
	</form>
 
 <?php
	primo($_GET["formulario"]);
 ?>


<?php
	function primo($entrada){
	
		$verificador=0;
		$divisor=2;
		do{
			if($entrada % $divisor==0){
				$verificador++;
			}
			$divisor++;
		}while ($divisor<=($entrada/2));
		
		if($verificador==0)
			echo '<b>O número ' , ($entrada) , ' é primo.<b>';
		else
			echo '<b>O número ' , ($entrada) , ' NÃO é primo.<b>';
	}
?>