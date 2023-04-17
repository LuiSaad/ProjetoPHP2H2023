<?php 
$variavel = "Ana";

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

if (is_array($variavel)) {

	echo "<br/> variavel é um array";
} else
{
	echo "<br/> variavel não é um array";
} 
if (is_array($nomes)) {
	echo "<br/> nomes é um array";
} 
else {
	echo "<br/> nomes não é um array";
}



 ?>