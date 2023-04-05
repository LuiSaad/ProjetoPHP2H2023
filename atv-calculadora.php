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
 	$op = 1;

 	switch ($op) {
	case 1:
		echo 'Operação escolhida: adição';
		echo "<br> Primeiro número escolhido: $n1";
		echo "<br> Segundo número escolhido: $n2";
		echo "<br> O resultado do cálculo é: " .somarvalor($n1,$op,$n2);
		
		break;
	case 2:
		echo 'Operação escolhida: subtração';
		echo "<br> Primeiro número escolhido: $n1";
		echo "<br> Segundo número escolhido: $n2";
		echo "<br> O resultado do cálculo é: " .subtrairvalor($n1,$op,$n2);

		break;
	case 3: 
		echo 'Operação escolhida: multiplicação';
		echo "<br> Primeiro número escolhido: $n1";
		echo "<br> Segundo número escolhido: $n2";
		echo "<br> O resultado do cálculo é: " .multiplicarvalor($n1,$op,$n2);

		break;
	case 4: 
		echo 'Operação escolhida: divisão';
		echo "<br> Primeiro número escolhido: $n1";
		echo "<br> Segundo número escolhido: $n2";
		echo "<br> O resultado do cálculo é: " .dividirvalor($n1,$op,$n2);

		
	
		break;


	default: 
		echo "Operação inválida";
		break;
	}
	
	
 ?>