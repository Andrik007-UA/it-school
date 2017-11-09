<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = (int)$_GET["a"];

if($a<1000)
	echo ($a*6)*0.2;
else if($a>=1000 && $a<2000)
	echo ($a*6)*0.25;
else if($a>=2000)
	echo ($a*6)*0.3;

?>
</div>