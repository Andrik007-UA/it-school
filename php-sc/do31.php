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
	$in = $d["wd"];
	for($i = 0; $i<strlen($in); $i++)
		echo "<strong>".substr($in, $i, 1)."<br /></strong>";
}

function dwhile($d){
	$in = $d["wd"];
	$i = 0;
	while($i<strlen($in)){
		echo "<strong>".substr($in, $i, 1)."<br /></strong>";
		$i++;
	}
}
function dowhile($d){
	$in = $d["wd"];
	$i = 0;
	do{
		echo "<strong>".substr($in, $i, 1)."<br /></strong>";
		$i++;
	}while($i<strlen($in));
}

?>


</div>