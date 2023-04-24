<?php 

	$emp = array(
		//    0    1     2
		array(1,"José ",4000),   /*0*/
		array(2, "Maria ",5000), /*1*/
		array(3,"João ",3000)    /*2*/

	);
echo "<pre>";
print_r($emp);
echo "<pre/>";


$func = array(
		array(1,"Francisca ", 1500),
		array(2,"Debora ", 2500),
		array(3,"Mohamed ", 3500)
	);

print_r($func);
var_dump($func);


 ?>

<br>

<?php  

$emp = array (
	array (1, "Cyntia", 4000),
	array(2, "Caio", 2000),
	array(3, "Mike", 5000)

);


for ($linha = 0; $linha < 3; $linha++){
	for ($coluna=0; $coluna < 3; $coluna++) { 
		echo $emp[$linha][$coluna]. " ";

	} 
	echo "<br/>";
}


?>