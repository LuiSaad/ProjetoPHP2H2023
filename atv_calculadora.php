<?php 


function calcular () {
 	
 	$num1 = 8;
 	$num2 = 4;
 	$op = 2;

 	switch ($op) {
	case 1: 
		echo 'Operação escolhida: adição';
		$res = $num1 + $num2;
		
		break;
	case 2:
		echo 'Operação escolhida: subtração';
		$res = $num1 - $num2;
		
		break;
	case 3: 
		echo 'Operação escolhida: multiplicação';
		$res = $num1 * $num2;
		
		break;
	case 4: 
		echo 'Operação escolhida: divisão';
		$res = $num1 / $num2;
		
	
		break;


	default: 
		echo "Operação";
		break;
	}
	
	echo "<br> Primeiro número escolhido: $num1";
	echo "<br> Segundo número escolhido: $num2";
	echo "<br> O resultado do cálculo é: $res";
	

 }
 	calcular();

	








 ?>