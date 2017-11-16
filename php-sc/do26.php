<link rel="stylesheet" href="pstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="main">
<div width="80%">
	<table class="table table-striped table-bordered table-hover" width="100%">
		<thead>
			<th>#</th>
			<th>X</th>
			<th>Y</th>
		</thead>
<?php
$TYPE = $_GET["ctype"];

switch($TYPE){
	case "for":dfor($_GET);break;
	case "while":dwhile($_GET);break;
	case "do":dowhile($_GET);break;
}
function dfor($d){
	$t=1;
	for($i =-10 ;$i <= 10;$i+=0.5){
		echo "<tr>";
		echo "<td>".$t."</td>";
		echo "<td>$i</td>";
		echo "<td>".(5 * pow($i, 2))."</td>";
		echo "</tr>";
		$t++;
	}
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
</table>
</div>
</div>