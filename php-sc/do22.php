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
	$frow = "";
	$srow = "";
	$sum = 0;
	for($i = 1; $i <= 20; $i++){
		$tsum = round(1 / $i, 2);
		if($i != 20){
			$frow .= "1/".$i." + ";
			$srow .= $tsum." + ";
		}else{
			$frow .= "1/".$i." = ";
			$srow .= $tsum." = ";
		}

		$sum += $tsum;
	}

	echo $frow.$srow."<strong>".$sum;
}

function dwhile($d){
	$frow = "";
	$srow = "";
	$sum = 0;
	$i=1;
	while($i <= 20){
		$tsum = round(1 / $i, 2);
		if($i != 20){
			$frow .= "1/".$i." + ";
			$srow .= $tsum." + ";
		}else{
			$frow .= "1/".$i." = ";
			$srow .= $tsum." = ";
		}
		$i++;
		$sum += $tsum;
	}

	echo $frow.$srow."<strong>".$sum;
}
function dowhile($d){
	$frow = "";
	$srow = "";
	$sum = 0;
	$i=1;
	do{
		$tsum = round(1 / $i, 2);
		if($i != 20){
			$frow .= "1/".$i." + ";
			$srow .= $tsum." + ";
		}else{
			$frow .= "1/".$i." = ";
			$srow .= $tsum." = ";
		}
		$i++;
		$sum += $tsum;
	}while($i <= 20);

	echo $frow.$srow."<strong>".$sum;
}

?>
</div>