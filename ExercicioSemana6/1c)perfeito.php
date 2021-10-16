<html>
 <head>
  <title>Perfeito</title>
 </head>
 <body>
 
	<h1>Verifique se um número é perfeito:</h1>
 
	<form action="1c)perfeito.php" method="get">
		Digite o número para verificar se ele é perfeito: <input type="number" name="formulario"><br>
		<input type="submit">
	</form>
 
 <?php
	perfeito($_GET["formulario"]);
 ?>


<?php
	function perfeito($entrada){
		
		$soma=0;
		$divisor=1;
		do{
			if($entrada % $divisor==0){
				$soma+=$divisor;
			}
			$divisor++;
		}while ($divisor<=($entrada/2));
		
		if($entrada==$soma)
			echo '<b>O número ' , ($entrada) , ' é perfeito.<b>';
		else
			echo '<b>O número ' , ($entrada) , ' NÃO é perfeito.<b>';
	}
?>