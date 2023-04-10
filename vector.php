<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>


<?php 
 
 $nome1 = "Cyntia";
 $nome2 = "Caio";
 $nome3 = "Michael";
 $nome4 = "Luisa";
 $nome5 = "Lupita";

 echo ("$nome1 <br/> $nome2 <br/>$nome3 <br/>$nome4 <br/>$nome5 <br/>");

 ?>

 <p>Exemplo declaração de variável com array</p>

 <?php 

$nome = array("Cyntia", "Caio", "Michael", "Luisa", "Lupita");

echo "Os nomes no array </br>";

foreach ($nome as $nomes) {
	echo "<br/>".$nomes;
}


  ?>


<p>Testando Vetor</p>

<?php 

$num = array(1,2,3,4,5);

foreach($num as $valor){

	echo "Valor é $valor <br/>";

}
$num[0] = "Um";
$num[1] = "Dois";
$num[2] = "Três";
$num[3] = "Quatro";
$num[4] = "Cinco";

foreach($num as $valor){
	echo"Valor é $valor <br/>";


}

 ?>
</body>
</html>


