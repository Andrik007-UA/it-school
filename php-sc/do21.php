<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
$TYPE = $_GET["ctype"];

switch($TYPE){
	case "for":dfor($_GET);break;
	case "while":dwhile($_GET);break;
	case "do":dowhile($_GET);break;
}


function dfor($d){
	$a = $d["a"];
	$b = $d["b"];
	$sum =0;
	for($i = $a; $i < $b; $i++){
		if($i != $b-1)
			echo "$i + ";
		else
			echo "$i = ";

		$sum += $i;
	}
	echo $sum;
}

function dwhile($d){
	$a = $d["a"];
	$b = $d["b"];
	$sum =0;
	while($a < $b){
		if($a != $b-1)
			echo "$a + ";
		else
			echo "$a = ";
		$sum += $a;
		$a++;

	}
	echo $sum;
}
function dowhile($d){
	$a = $d["a"];
	$b = $d["b"];
	$sum =0;
	do{
		if($a != $b-1)
			echo "$a + ";
		else
			echo "$a = ";
		$sum += $a;
		$a++;

	}while($a < $b);
	echo $sum;
}

?>
</div>