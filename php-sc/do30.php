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
	$input = $d["k"];
	$c = 0;
	for(;$input != 0;){
        $a = $input%10;
        $input -= $a;
        $input /= 10;
        $c++;
    }

	echo "Розрядність числа ".$d["k"]." - ".$c." розрядів";
}

function dwhile($d){
	$input = $d["k"];
	$c = 0;
	while($input != 0){
        $a = $input%10;
        $input -= $a;
        $input /= 10;
        $c++;
    }

	echo "Розрядність числа ".$d["k"]." - ".$c." розрядів";
}
function dowhile($d){
	$input = $d["k"];
	$c = 0;
	do{
        $a = $input%10;
        $input -= $a;
        $input /= 10;
        $c++;
    }while($input != 0);

	echo "Розрядність числа ".$d["k"]." - ".$c." розрядів";
}

?>


</div>