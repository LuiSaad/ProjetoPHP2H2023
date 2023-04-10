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
 	$op = 3;

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
		 $res = dividirvalor($n1,$n2);

		
	
		break;


	default: 
		echo "Operação inválida";
		break;
	}
	echo "<br> Primeiro número escolhido: $n1";
	echo "<br> Segundo número escolhido: $n2";
	echo "<br> O resultado do cálculo é: $res";
	
	
 ?>