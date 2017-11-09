<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = $_GET["n1"];
$b = $_GET["n2"];
$c = $_GET["n3"];
$d = $_GET["n4"];
$e = $_GET["n5"];

if($b > $a){
	$temp = $a;
	$a = $b;
	$b = $temp;
}
if($c > $a){
	$temp = $a;
	$a = $c;
	$c = $temp;
}
if($d > $a){
	$temp = $a;
	$a = $d;
	$d = $temp;
}
if($e > $a){
	$temp = $a;
	$a = $e;
	$e = $temp;
}
echo $a;