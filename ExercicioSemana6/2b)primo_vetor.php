<html>
 <head>
  <title>Primo</title>
 </head>
 <body>
 
	<h1>Verifique se um número é primo:</h1>
 
	<form action="2b)primo_vetor.php" method="get">
		Digite o número para verificar para encontrar todos os primos abaixo dele: <input type="number" name="formulario"><br>
		<input type="submit">
	</form>
 
 <?php
	primoVetor($_GET["formulario"]);
 ?>


<?php
	function primoVetor($entrada){
		
		$numero=$entrada;
		$vetor_primo=array();
		do{
			if(primo($numero))
				$vetor_primo[]=$numero;
			$numero--;
		}while ($numero>0);
		
		echo '<h2>Todos os números abaixo de ' , ($entrada) , ' que são primos:</h2>';
		foreach($vetor_primo as $valor){
			echo 'O número ',($valor),' é primo.';
			echo '<br> ';
		}
	}
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
			return true;
		else
			return false;
	}
?>