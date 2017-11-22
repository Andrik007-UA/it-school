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
	$x = 0;
	for($i =1;$i < 100;$i++){
		if($i%$d["z"]==0){$dobutok *= $i;$x++;}
	}
	echo "Добуток: <strong>".$dobutok."</strong>. Кількість чисел: <strong>".$x."</strong>";
}

function dwhile($d){
	$dobutok = 1;
	$i = 1;
	$x = 0;
	while($i < 100){
		if($i%$d["z"]==0){$dobutok *= $i;$x++;}
		$i++;
	}
	echo "Добуток: <strong>".$dobutok."</strong>. Кількість чисел: <strong>".$x."</strong>";
}
function dowhile($d){
	$dobutok = 1;
	$i = 1;
	$x = 0;
	do{
		if($i%$d["z"]==0){$dobutok *= $i;$x++;}
		$i++;
	}while($i < 100);
	echo "Добуток: <strong>".$dobutok."</strong>. Кількість чисел: <strong>".$x."</strong>";
}

?>
</div>