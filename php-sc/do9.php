<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
error_reporting(E_ALL);
$a =(int)$_GET["a"];
$b =(int)$_GET["b"];
echo "A";
if($a>$b){
	echo ">";
}elseif($a < $b){
	echo "&lt;";
}else{
	echo "=";
}

echo "B";
?>
</div>