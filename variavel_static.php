<?php 
	 
	function exibir () {
		STATIC $ano;
		$ano++;
		echo "<br/> " . $ano;	


	}

	echo exibir ();
	echo exibir ();
	echo exibir ();

	echo "<br/> Olá seja bem vinda ".$_SERVER['REMOTE_ADDR']."<br/>";
	echo "Você está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];

 ?>