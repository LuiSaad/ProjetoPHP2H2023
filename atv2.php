<?php 

$vp = 20;
$op = 3;

switch ($op) {
	case 1: 
		$res = ($vp * 0.10) + $vp;
		
		break;
	case 3:
		$res = ($vp * 0.25) + $vp;
		
		break;
	case 4: 
		$res = ($vp * 0.30) + $vp;
		
		break;
	case 8: 
		$res = ($vp * 0.50) + $vp;
		
	
		break;


	default: 
		echo "Opção inválida";
		break;
	}
	echo "Código escolhido: $op <br>";
	echo "O valor final do produto é: $res";
	








 ?>