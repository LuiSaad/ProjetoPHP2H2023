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
 	$n2 = 5;
 	$op = 2;

 	switch ($op) {
	case 1:
		$res = somarvalor($n1,$n2);
		
		break;
	case 2:
		$res = subtrairvalor($n1,$n2);

		break;
	case 3: 
		 $res = multiplicarvalor($n1,$n2);

		break;
	case 4: 
		if ($n2 == 0) {
			echo "É impossível dividir por 0";
		} else {
		 $res = dividirvalor($n1,$n2);
		}

		
	
		break;


	default: 
		echo "Operação inválida";
		break;
	}

	
	echo "<br> O resultado do cálculo é: $res";
	

	
 ?>