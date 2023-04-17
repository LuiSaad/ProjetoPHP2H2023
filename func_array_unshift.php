<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<style type="text/css">
	body {
		background-color: pink;
	}
	


</style>
<body>


<h1>Array Unshift</h1>

<?php 

//tem como finalidade adicionar var no começo
// adiciona no final //
//essa funnção remove e retorna o item encontrado na primeira posição do vetor

$nomes = array ("Maria", "José", "Pedro");
array_unshift($nomes, "Ana");

foreach ($nomes as $item) {
	echo "<br/>".$item;
}

?>

<br>

<h1>Array Push</h1>

<?php 

$nomes = array ("Maria", "José", "Pedro");
array_push($nomes, "Ana");

foreach ($nomes as $item) {
	echo "<br/>".$item;
}

 ?> 

 <br>

 <h1>Array Shift</h1>

<?php 
	$nomes = array("Maria","José","Pedro");
	$excluido = array_shift($nomes);

	foreach($nomes as $item){
		echo "<br/>".$item;
	}

	echo "<br/><br/> Nome removido: ".$excluido;

 ?>

<br>

<h1>Array Pop</h1>

 <?php 
 	$nomes = array("Maria","José", "Pedro");
 	$excluido = array_pop($nomes);

 	foreach ($nomes as $item) {
 		echo "<br/>".$item;
 	}

 	echo "<br/><br/> Nome removido: ".$excluido;

 ?>

<br>

<h1>Array Key Exists</h1>

 <?php 
  $nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

  if (array_key_exists("ZE", $nomes)) {
  	
  	echo "<br/> Nome encontrado no vetor, atráves da chave. ";
  }

 ?>

 <br>

 <h1>Array Search</h1>

<?php

$nomes = array ("MA" => "Maria", "ZE" => "José", "PE"=> "Pedro", "AN" => "Ana");

$chave = array_search("Ana", $nomes);
echo "<br/> Chave de busca realizada: ".$chave;


 ?>


<br>

<h1>Array Keys</h1>

<?php 

$nomes = array ("MA" => "Maria", "ZE" => "José", "PE"=> "Pedro", "AN" => "Ana");

$chaves = array_keys($nomes);
echo "<br/> Chave de busca realizada: ".$chave;

foreach($chaves as $item){

	echo "<br/>".$item;
}
echo "<br/>";

print_r($chaves);



 ?>








</body>
</html>