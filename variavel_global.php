<?php 

	$ano = 2023;

	function exibir (){
		GLOBAL $ano;
		$ano++;
		return $ano;

	}
	echo "<br/> Ano: ".$ano;
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".$ano;



 ?>