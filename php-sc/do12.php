<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$x = (int)$_GET["x"];
$y = (int)$_GET["y"];
$gy = (pow($x, 2)+($x*15))-7;
if($gy == $y)
	echo "Так";
else
	echo "Ні";
?>
</div>