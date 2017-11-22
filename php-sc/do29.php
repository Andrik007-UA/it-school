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
	$i=2;
	$proste = true;
	for(;$i < $d["k"];){
		if($d["k"] % $i == 0){
			$proste = false;
			break;
		}

		$i++;
	}

	echo "Число ".$d["k"]." ".($proste?"є простим":"не є простим");
}

function dwhile($d){
	$i=2;
	$proste = true;
	while($i < $d["k"]){
		if($d["k"] % $i == 0){
			$proste = false;
			break;
		}

		$i++;
	}

	echo "Число ".$d["k"]." ".($proste?"є простим":"не є простим");
}
function dowhile($d){
	$i=2;
	$proste = true;
	do{
		if($d["k"] % $i == 0){
			$proste = false;
			break;
		}

		$i++;
	}while($i < $d["k"]);

	echo "Число ".$d["k"]." ".($proste?"є простим":"не є простим");
}

?>


</div>