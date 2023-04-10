<?php 

function somarvalor ($n1,$n2){
echo "Operação: adição";
 $c = $n1 + $n2;
return $c;

}

function subtrairvalor ($n1,$n2){
echo "Operação: subtração";
 $c = $n1 - $n2;
return $c;

}

function multiplicarvalor ($n1,$n2){
echo "Operação: multiplicação";
 $c = $n1 * $n2;
return $c;

}

function dividirvalor ($n1,$n2){
echo "Operação: divisão";
 $c = $n1 / $n2;
return $c;

}

	$n1 = 8;
 	$n2 = 4;
 	$op = array ("+", "-", "*", "/");

 	echo "A escolha do operador no array";

 	foreach ($op as $ops) {
	echo "<br/>".$ops;
}


 	switch ($op) {
	case "+":
		$res = somarvalor($n1,$n2);
		
		break;
	case "-":
		$res = subtrairvalor($n1,$n2);

		break;
	case "*": 
		 $res = multiplicarvalor($n1,$n2);

		break;
	case "/": 
		 $res = dividirvalor($n1,$n2);

		
	
		break;


	default: 
		echo "Operação inválida";
		break;
	}

	echo "<br> O resultado do cálculo é: $res";
	
	
 ?>