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
	for($i =1 ;$i <= 9;$i++){
		echo $d["n"]." &times; ".$i." = <strong>".($d["n"] * $i). "</strong><br />";
	}
}

function dwhile($d){
	$i=1;
	while($i<=9){
		echo $d["n"]." &times; ".$i." = <strong>".($d["n"] * $i). "</strong><br />";
		$i++;
	}
}
function dowhile($d){
	$i=1;
	do{
		echo $d["n"]." &times; ".$i." = <strong>".($d["n"] * $i). "</strong><br />";
		$i++;
	}while($i<=9);
}

?>
</div>