<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<style type="text/css">
	h2{
		background-color: pink;
		width: 900px;
	}


</style>
<body>

<h1>Arrays:</h1>
<h2>Array Unshift</h1>

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

<h2>Array Push</h2>

<?php 

$nomes = array ("Maria", "José", "Pedro");
array_push($nomes, "Ana");

foreach ($nomes as $item) {
	echo "<br/>".$item;
}

 ?> 

 <br>

 <h2>Array Shift</h2>

<?php 
	$nomes = array("Maria","José","Pedro");
	$excluido = array_shift($nomes);

	foreach($nomes as $item){
		echo "<br/>".$item;
	}

	echo "<br/><br/> Nome removido: ".$excluido;

 ?>

<br>

<h2>Array Pop</h2>

 <?php 
 	$nomes = array("Maria","José", "Pedro");
 	$excluido = array_pop($nomes);

 	foreach ($nomes as $item) {
 		echo "<br/>".$item;
 	}

 	echo "<br/><br/> Nome removido: ".$excluido;

 ?>

<br>

<h2>Array Key Exists</h2>

 <?php 
  $nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

  if (array_key_exists("ZE", $nomes)) {
  	
  	echo "<br/> Nome encontrado no vetor, atráves da chave. ";
  }

 ?>

 <br>

 <h2>Array Search</h2>

<?php

$nomes = array ("MA" => "Maria", "ZE" => "José", "PE"=> "Pedro", "AN" => "Ana");

$chave = array_search("Ana", $nomes);
echo "<br/> Chave de busca realizada: ".$chave;


 ?>


<br>

<h2>Array Keys</h2>

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
 <br>
 <h2>Movendo o ponteiro de um array</h2>
<?php 

$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro", "AN" => "Ana");

echo "<br/> Next: ".next($nomes);
echo "<br/> End: ".end($nomes);
echo "<br/> Prev: ".prev($nomes);
echo "<br/> Reset: ".reset($nomes);



 ?>
 







</body>
</html>