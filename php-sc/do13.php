<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = $_GET["n1"];
$b = $_GET["n2"];
$c = $_GET["n3"];
$ok=false;
if($a < $b){
	$temp = $a;
	$a = $b;
	$b = $temp;
}
if($a < $c){
	$temp = $a;
	$a = $c;
	$c = $temp;
}
if($c + $b >= $a)
	$ok=true;


if($ok)
	echo "Такий трикутник побудувати можна";
else
	echo "Такий трикутник неможливо побудувати";

?>
</div>