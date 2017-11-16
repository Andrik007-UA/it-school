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
	for($i=1; $i<=$d["n"];$i++){
		for($j = 1; $j<= $i; $j++)
			echo $i." ";
		echo "<br />";
	}
}

function dwhile($d){
	$i=1;
	while($i<=$d["n"]){
		$j=1;
		while($j<= $i){
			echo $i." ";
			$j++;
		}
		echo "<br />";
		$i++;
	}
}
function dowhile($d){
	$i=1;
	do{
		$j=1;
		while($j<= $i){
			echo $i." ";
			$j++;
		}
		echo "<br />";
		$i++;
	}while($i<=$d["n"]);
}

?>
</div>