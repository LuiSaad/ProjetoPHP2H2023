<?php 

$qth = 44;
$sh = 1212.00;
$ndp = 1;



$sb = $qth * $sh + (50*$ndp);


if ($sb <= 1000) {
	$inss = ($sb*8.5)/100;


} else if ($sb > 1000) {
	$inss = ($sb*9)/100;
	echo $inss;
} else if ($sb <= 500){
	$ir = 0;
	echo $sb;
} else if ($sb > 500 && $sb <= 1000){
	$ir = ($sb*5)/100;
	echo $ir;
} else if ($sb > 1000) {
	$ir = ($sb*7)/100;
	echo $ir;
} else {
	echo $sb;
}




 ?>