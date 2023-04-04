<?php 

function somarvalor ($n1,$op,$n2){
 $c = $n1 + $n2;
return $c;

}

function subtrairvalor ($n1,$op,$n2){
 $c = $n1 - $n2;
return $c;

}

function multiplicarvalor ($n1,$op,$n2){
 $c = $n1 * $n2;
return $c;

}

function dividirvalor ($n1,$op,$n2){
 $c = $n1 / $n2;
return $c;

}

	$n1 = 8;
 	$n2 = 4;
 	$op = 2;

 	switch ($op) {
	case 1: 
		echo 'Operação escolhida: adição';
		somarvalor($n1,$op,$n2);
		
		break;
	case 2:
		echo 'Operação escolhida: subtração';
		subtrairvalor($n1,$op,$n2);

		break;
	case 3: 
		echo 'Operação escolhida: multiplicação';
		multiplicarvalor ($n1,$op,$n2);
		

		break;
	case 4: 
		echo 'Operação escolhida: divisão';
		dividirvalor ($n1,$op,$n2);
		
	
		break;


	default: 
		echo "Operação";
		break;
	}
	
	echo "<br> Primeiro número escolhido: $n1";
	echo "<br> Segundo número escolhido: $n2";
	echo "<br> O resultado do cálculo é: " .subtrairvalor($n1,$op,$n2);
 ?>