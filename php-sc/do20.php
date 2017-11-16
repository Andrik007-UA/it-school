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
	for($i=0;$i<30;$i++)
		echo "$i Андрій Филипюк<br />";
}

function dwhile($d){
	$i=0;
	while($i<30){
		echo "$i Андрій Филипюк<br />";
		$i++;
	}
}
function dowhile($d){
	$i=0;
	do{
		echo "$i Андрій Филипюк<br />";
		$i++;
	}while($i<30);
}

?>
</div>