<html>
 <head>
  <title>Perfeito</title>
 </head>
 <body>
 
	<h1>Verifique se os números perfeitos:</h1>
 
	<form action="2c)perfeito_vetor.php" method="get">
		Digite um número para verificar quais números abaixo dele são perfeitos: <input type="number" name="formulario"><br>
		<input type="submit">
	</form>
 
 <?php
	perfeitoVetor($_GET["formulario"]);
 ?>


<?php
	function perfeitoVetor($entrada){
		
		$numero=$entrada;
		$vetor_perfeito=array();
		do{
			if(perfeito($numero))
				$vetor_perfeito[]=$numero;
			$numero--;
		}while ($numero>0);
		
		echo '<h2>Todos os números abaixo de ' , ($entrada) , ' que são perfeitos:</h2>';
		foreach($vetor_perfeito as $valor){
			echo 'O número ',($valor),' é perfeito.';
			echo '<br> ';
		}
	}
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
			return true;
		else
			false;
	}
?>