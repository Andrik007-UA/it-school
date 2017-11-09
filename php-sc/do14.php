<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = (int)$_GET["a"];
$b = (int)$_GET["b"];
$c = $_GET["znak"];

if($c == "plus")
	echo "(a+b)<sup>2</sup> = ($a+$b)<sup>2</sup> = ".(pow($a, 2) + (2* $a * $b) + pow($b, 2));
else
	echo "(a-b)<sup>2</sup> = ($a-$b)<sup>2</sup> = ".(pow($a, 2) - (2* $a * $b) + pow($b, 2));

?>
</div>