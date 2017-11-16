<link rel="stylesheet" href="pstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="main">
<?php
$TYPE = $_GET["ctype"];

switch($TYPE){
	case "for":dfor($_GET);break;
	case "while":dwhile($_GET);break;
	case "do":dowhile($_GET);break;
}
function dfor($d){
	$dobutok = 1;
	for($i =1;$i < $d["k"];$i++){
		if($i%$d["z"]!=0)continue;
		$dobutok *= $i;
	}
	echo $i;
}

function dwhile($d){
	$t=1;
	$i = -10;
	while($i <= 10){
		echo "<tr>";
		echo "<td>".$t."</td>";
		echo "<td>$i</td>";
		echo "<td>".(5 * pow($i, 2))."</td>";
		echo "</tr>";
		$t++;
		$i+=0.5;
	}
}
function dowhile($d){
	$t=1;
	$i = -10;
	do{
		echo "<tr>";
		echo "<td>".$t."</td>";
		echo "<td>$i</td>";
		echo "<td>".(5 * pow($i, 2))."</td>";
		echo "</tr>";
		$t++;
		$i+=0.5;
	}while($i <= 10);
}

?>
</div>