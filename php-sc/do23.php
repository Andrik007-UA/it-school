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
	$fact = 1;
	for($i=1; $i<=$d["a"];$i++){
		$fact *= $i;
	}
	echo "Факторіал ".$d["a"]." = ".$fact;
}

function dwhile($d){
	$fact = 1;
	$i=1;
	while($i<=$d["a"]){
		$fact *= $i;
		$i++;
	}
	echo "Факторіал ".$d["a"]." = ".$fact;
}
function dowhile($d){
	$fact = 1;
	$i=1;
	do{
		$fact *= $i;
		$i++;
	}while($i<=$d["a"]);
	echo "Факторіал ".$d["a"]." = ".$fact;
}

?>
</div>